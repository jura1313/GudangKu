<?php

use App\Models\store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('insert', function () {
    return view('create');
});

Route::get('/show', [StoreController::class, 'show']);

Route::post('/create', [StoreController::class, 'create']);

Route::get('/edit/{id}', [StoreController::class, 'edit']);

Route::post('/update/{id}', [StoreController::class, 'update']);

Route::get('/delete/{id}', [StoreController::class, 'delete']);

// Route::post('/search', [StoreController::class, 'search']);

Route::get('/search', [StoreController::class, 'search']);

Route::get('/getubah/{id}', [StoreController::class, 'getubah']);

