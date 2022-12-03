<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});


Route::get('/index', [HomeController::class, 'index']);
Route::view('/add-product', 'insert');
Route::post('/added', [HomeController::class, 'insert']);

Route::get('/update-product/{id}',[HomeController::class, 'update']);

Route::post('/updated/{id}', [HomeController::class, 'edit']);
Route::get('/delete-product/{id}',[HomeController::class, 'delete']);

Route::get('insert', [ HomeController::class, 'insert' ]);
Route::post('insert', [ HomeController::class, 'insert' ])->name('image.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
