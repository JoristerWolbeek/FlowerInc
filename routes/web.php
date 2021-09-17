<?php

use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/warehouses', [WarehouseController::class, 'index'])->middleware(['auth'])->name('warehouses');
Route::get('/warehouses/add', [WarehouseController::class, 'add'])->middleware(['auth'])->name('warehouses/add');
Route::post('/warehouses/create', [WarehouseController::class, 'create'])->middleware(['auth'])->name('warehouses/create');
Route::post('/warehouses/delete', [WarehouseController::class, 'delete'])->middleware(['auth'])->name('warehouses/delete');
Route::get('/flowers', [FlowerController::class, 'index'])->middleware(['auth'])->name('flowers');
Route::get('/flowers/add', [FlowerController::class, 'add'])->middleware(['auth'])->name('flowers/add');
Route::post('/flowers/create', [FlowerController::class, 'create'])->middleware(['auth'])->name('flowers/create');
Route::post('/flowers/delete', [FlowerController::class, 'delete'])->middleware(['auth'])->name('flowers/delete');
Route::post('/stock/add', [StockController::class, 'add'])->middleware(['auth'])->name('stock/add');


require __DIR__ . '/auth.php';
