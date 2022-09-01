<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PropertyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('recipe', RecipeController::class);
Route::resource('category', CategoryController::class);
// Route::resource('recipe-ingredient', CategoryController::class);
Route::get('property',[PropertyController::class, 'index'])->name('property');

Route::get('ingredient/create',[PropertyController::class, 'create_ingredient']);
Route::post('ingredient/store',[PropertyController::class, 'store_ingredient']);
Route::get('ingredient/edit/{id}',[PropertyController::class, 'edit_ingredient']);
Route::patch('ingredient/update/{id}',[PropertyController::class, 'update_ingredient']);
Route::delete('ingredient/delete/{id}',[PropertyController::class, 'destroy_ingredients']);

Route::get('unit/create',[PropertyController::class, 'create_unit']);
Route::post('unit/store',[PropertyController::class, 'store_unit']);
Route::get('unit/edit/{id}',[PropertyController::class, 'edit_unit']);
Route::patch('unit/update/{id}',[PropertyController::class, 'update_unit']);
Route::delete('unit/delete/{id}',[PropertyController::class, 'delete_unit']);

Route::get('quantity/create',[PropertyController::class, 'create_quantity']);
Route::post('quantity/store',[PropertyController::class, 'store_quantity']);
Route::get('quantity/edit/{id}',[PropertyController::class, 'edit_quantity']);
Route::patch('quantity/update/{id}',[PropertyController::class, 'update_quantity']);
Route::delete('quantity/delete/{id}',[PropertyController::class, 'delete_quantity']);

Route::get('/', function () {
    return view('welcome');
});
