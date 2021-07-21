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
    return view('welcome', ['title' => 'Marvind Menu']);
});

Route::get ('home', function (){
    return view('home');
});

Route::get ('profile', function (){
    return view('profile');
});

Route::get('menus', 'App\Http\Controllers\MenuController@data');
Route::get('menus/add', 'App\Http\Controllers\MenuController@add');
Route::post('menus', 'App\Http\Controllers\MenuController@addProcess');
Route::get('menus/edit/{id}', 'App\Http\Controllers\MenuController@edit');
Route::patch('menus/{id}', 'App\Http\Controllers\MenuController@editProcess');
Route::delete('menus/{id}', 'App\Http\Controllers\MenuController@delete');