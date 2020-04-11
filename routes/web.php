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


Route::group(['prefix' => 'Login', 'middleware' =>['api']], function () {

    Route::get('/index',"LoingContrroller@index");
    Route::get('/demo','LoginController@demo');
});
Route::get('/dologin', 'LoginController@dologin');// ceshi
Route::get('/Login','LoginController@login');


