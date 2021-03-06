<?php

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('categories')->group(function () {
    Route::get('/index', [
        'as'=>'categories.index',
        'uses'=>'App\Http\Controllers\CategoryController@index'
    ]);
    Route::get('/create', [
        'as'=>'categories.create',
        'uses'=>'App\Http\Controllers\CategoryController@create'
    ]);
});


