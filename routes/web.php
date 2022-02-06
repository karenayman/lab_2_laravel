<?php

use App\Http\Controllers\ArticaleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('store');
});
Route::get('/home', [IndexController::class, 'home']);
Route::get('/product/{id}', [IndexController::class, 'product_details']);
Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');
Route::get('/createc', [CategoryController::class, 'create']);
Route::post('/savec', [CategoryController::class, 'save']);
Route::get('/deletec/{id}', [CategoryController::class, 'delete']);
Route::get('/showc/{id}', [CategoryController::class, 'show']);
Route::get('/showdatac/{id}', [CategoryController::class, 'show_data']);
Route::post('/savedatac', [CategoryController::class, 'save_data']);

Route::get('/articale', [ArticaleController::class, 'list'])->name('articale.list');
Route::get('/create', [ArticaleController::class, 'create']);
Route::post('/save', [ArticaleController::class, 'save']);
Route::get('/delete/{id}', [ArticaleController::class, 'delete']);
Route::get('/show/{id}', [ArticaleController::class, 'show']);
Route::get('/showdata/{id}', [ArticaleController::class, 'show_data']);
Route::post('/savedata', [ArticaleController::class, 'save_data']);