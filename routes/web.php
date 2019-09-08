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
Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function () {
    Route::resource('/product', 'ProductController');
});


Route::resource('/admin/category', 'CategoryController');


Route::get('/About-Us', function (){
    return view('client.about-us');
});
Route::get('/Contact-Us', function (){
    return view('client.contact-us');
});


Route::get('/Product-Details', function (){
    return view('client.productdetails');
});

Route::get('/Policy', function (){
    return view('client.policy');
});

Route::get('/Policy/Data-Confidentiality', function (){
    return view('client.policy.dataconfidentiality');
});
Route::get('/Policy/Delivery-Transport', function (){
    return view('client.policy.deliverytransport');
});
Route::get('/Policy/Payment-Security', function (){
    return view('client.policy.paymentsecurity');
});

Route::get('/admin/chart', function () {
    return view('admin.dashboard.chart');
});

Route::get('/admin/user', 'AdminUserController@index')->name('admin.get.user');
Route::get('/admin/user/edit/{id}', 'AdminUserController@editUser')->name('admin.edit.user');
Route::put('/admin/user/update/{id}', 'AdminUserController@update')->name('admin.update.user');
Route::delete('/admin/user/delete/{id}', 'AdminUserController@delete')->name('admin.delete.user');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'AdminController@getLogin')->name('admin.login');
    Route::post('/login', 'AdminController@postLogin');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@getLogin')->name('get.login');
    Route::get('register', 'RegisterController@getRegister')->name('get.register');

    Route::post('login', 'LoginController@postLogin')->name('post.login');
    Route::post('register', 'RegisterController@postRegister')->name('post.register');

    Route::get('logout', 'LoginController@getLogout')->name('get.logout.user');
});

Route::prefix('shopping')->group(function (){
    Route::get('/add/{id}', 'ShoppingCartController@addProduct')->name('add.shopping.cart');
});

Route::group(['prefix' => 'transaction'], function (){
    Route::get('/', 'AdminTransactionController@index')->name('admin.list.transaction');
});
