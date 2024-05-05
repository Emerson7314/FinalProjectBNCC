<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminDashboard', [ItemsController::class, 'show']);
Route::get('/add-items', [ItemsController::class, 'create']);
Route::post('/store-items', [ItemsController::class, 'store']);

Route::get('/add-category', [CategoryController::class, 'create']);
Route::post('/store-category', [CategoryController::class, 'store']);

Route::get('/add-invoice/{id}', [InvoiceController::class, 'create']);
Route::post('/store-invoice/{id}', [InvoiceController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
