<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Models\MeasurementQty;
use App\Models\MeasurementUnit;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        $quantities = MeasurementQty::all();
        $units = MeasurementUnit::all();
        return view('property.index',['ingredients'=>$ingredients,'quantities'=>$quantities,'units'=>$units,]);
    }

    // Ingredients
    public function create_ingredient()
    {
        return view('property.ingredient.create');
    }
    public function store_ingredient(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string'
        ]);

        Ingredient::create([
            'name'=> $request->name
        ]);

        return redirect('property');
    }
    public function edit_ingredient($id)
    {
        $ingredient = Ingredient::find($id);

        return view('property.ingredient.edit',['ingredient'=>$ingredient]);

    }
    public function update_ingredient(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string'
        ]);

        Ingredient::where('id',$id)->update([
            'name'=> $request->name
        ]);
        return redirect('property');
    }
    public function destroy_ingredients($id)
    {
        Ingredient::find($id)->delete();
        return redirect('property');
    }

    // Units
    public function create_unit()
    {
        return view('property.unit.create');
    }
    public function store_unit(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string'
        ]);

        MeasurementUnit::create([
            'name'=> $request->name
        ]);

        return redirect('property');
    }
    public function edit_unit($id)
    {
        $unit = MeasurementUnit::find($id);

        return view('property.unit.edit',['unit'=>$unit]);

    }
    public function update_unit(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string'
        ]);

        MeasurementUnit::where('id',$id)->update([
            'name'=> $request->name
        ]);
        return redirect('property');
    }
    public function delete_unit($id)
    {
        MeasurementUnit::find($id)->delete();
        return redirect('property');
    }



    public function create_quantity()
    {
        return view('property.quantity.create');
    }
    public function store_quantity(Request $request)
    {
        $this->validate($request,[
            'quantity' => 'required|integer|min:1'
        ]);

        MeasurementQty::create([
            'quantity'=> $request->quantity
        ]);

        return redirect('property');
    }
    public function edit_quantity($id)
    {
        $quantity = MeasurementQty::find($id);

        return view('property.quantity.edit',['quantity'=>$quantity]);

    }
    public function update_quantity(Request $request, $id)
    {
        $this->validate($request,[
            'quantity' => 'required|integer|min:1'
        ]);

        MeasurementQty::where('id',$id)->update([
            'quantity'=> $request->quantity
        ]);
        return redirect('property');
    }
    public function delete_quantity($id)
    {
        MeasurementQty::find($id)->delete();
        return redirect('property');
    }
}
