<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Products
Route::get('products', 'ProductController@index');
Route::post('products', 'ProductController@store');
Route::get('products/{id}', 'ProductController@show');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@destroy');

// Warehouse
Route::get('warehouses', 'WarehouseController@index');
Route::post('warehouses', 'WarehouseController@store');
Route::get('warehouses/{id}', 'WarehouseController@show');
Route::put('warehouses/{id}', 'WarehouseController@update');
Route::delete('warehouses/{id}', 'WarehouseController@destroy');

// Inventory
Route::get('inventory', 'InventoryController@index');
Route::post('inventory', 'InventoryController@store');
Route::get('inventory/{id}', 'InventoryController@show');
Route::put('inventory/{id}', 'InventoryController@update');
Route::delete('inventory/{id}', 'InventoryController@destroy');
