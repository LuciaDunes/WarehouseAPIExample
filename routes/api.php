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
Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::put('products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'delete']);

// Warehouse
Route::get('warehouses', [WarehouseController::class, 'index']);
Route::post('warehouses', [WarehouseController::class, 'store']);
Route::get('warehouses/{id}', [WarehouseController::class, 'show']);
Route::put('warehouses/{id}', [WarehouseController::class, 'update']);
Route::delete('warehouses/{id}', [WarehouseController::class, 'delete']);

// Inventory
Route::get('inventory', [InventoryController::class, 'index']);
Route::post('inventory', [InventoryController::class, 'store']);
Route::get('inventory/{id}', [InventoryController::class, 'show']);
Route::put('inventory/{id}', [InventoryController::class, 'update']);
Route::delete('inventory/{id}', [InventoryController::class, 'delete']);
