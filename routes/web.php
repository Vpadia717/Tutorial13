<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseHandler;
use Illuminate\Support\Facades\Auth;

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

Route::get('/form', function () {
    return view('form');
});

Route::get('/formdata', [DatabaseHandler::class, 'index']);

Route::post('/formdata/store', [DatabaseHandler::class, 'store']);

Route::get('/formdata/edit/{id}', [DatabaseHandler::class, 'edit']);

Route::get('/destroy/{id}', [DatabaseHandler::class, 'destroy']);

Route::post('/edit', [DatabaseHandler::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
