<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        Category::create([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit',['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        Category::find($id)->update([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
        return redirect('category');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect('category');
    }

    public function fetch(){

        $categories = Category::all();
        return response()->json([
            'status' => true,
            'message' => 'Data successfully fetched',
            'categories' => $categories
        ], 200);
    }
}
