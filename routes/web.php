<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function (){
    Route::resource('/product', 'ProductController');
});


Route::resource('/admin/category', 'CategoryController');

Route::get('/home', function (){
    return view('client.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('admin' )->group(function (){
    Route::get('/login', 'AdminController@getLogin')->name('admin.login');
    Route::post('/login', 'AdminController@postLogin');
});
