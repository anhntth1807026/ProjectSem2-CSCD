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

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use JD\Cloudder\Facades\Cloudder;

//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/client/profile', 'ProfileUserController@index')->name('client.profile');

Route::get('/About-Us', function () {
    return view('client.about-us');
});

//Route::get('/Contact-Us', function () {
//    return view('client.contact-us');
//});

Route::get('contact', 'ContactController@getContact')->name('get.contact');
Route::post('contact', 'ContactController@saveContact');


Route::get('/List-Product', 'ListProductController@index')->name('list.product');


Route::get('/Blog','BlogController@index_In_Blog' )->name('get.blog');

Route::get('/Blog/{id}', 'BlogController@blogDetail')->name('get.blogDetail');

Route::get('product/{id}', 'ProductDetailController@productDetail')->name('get.detail.product');


Route::get('/Policy', function () {
    return view('client.policy');
});

Route::get('/Policy/Data-Confidentiality', function () {
    return view('client.policy.dataconfidentiality');
});
Route::get('/Policy/Delivery-Transport', function () {
    return view('client.policy.deliverytransport');
});
Route::get('/Policy/Payment-Security', function () {
    return view('client.policy.paymentsecurity');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/article', 'BlogController@index')->name('get.article');

Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function () {
    Route::resource('/product', 'ProductController');
    Route::post('/product/delete-multiple', ['as' =>'product.delete-multiple', 'uses' => 'ProductController@destroyMultiple']);
    Route::post('/article/delete-multiple', ['as' =>'article.delete-multiple', 'uses' => 'ArticleController@destroyMultiple']);
    Route::post('/category/delete-multiple', ['as' =>'category.delete-multiple', 'uses' => 'CategoryController@destroyMultiple']);
    Route::resource('/category', 'CategoryController');
    Route::resource('/article', 'ArticleController');
    Route::get('/user', 'AdminUserController@index')->name('admin.get.user');
    Route::get('/user/edit/{id}', 'AdminUserController@edit')->name('admin.edit.user');
    Route::put('/user/update/{id}', 'AdminUserController@update')->name('admin.update.user');
    Route::delete('/user/delete/{id}', 'AdminUserController@destroy')->name('admin.delete.user');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.chart');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', 'AdminController@getLogin')->name('admin.login');
    Route::post('/login', 'AdminController@postLogin');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@getLogin')->name('get.login');
    Route::get('register', 'RegisterController@getRegister')->name('get.register');

    Route::post('login', 'LoginController@postLogin')->name('post.login');
    Route::post('register', 'RegisterController@postRegister')->name('post.register');

    Route::get('logout', 'LoginController@getLogout')->name('get.logout.user');

    Route::get('login/google', 'LoginController@redirectToProvider')->name('login.google');
    Route::get('login/google/callback', 'LoginController@handleProviderCallback');

    Route::get('/reset-password', 'ForgotPasswordController@getFormResetPassword')->name('form.reset.password');
    Route::post('/reset-password', 'ForgotPasswordController@sendCodeResetPassword');

    Route::get('/password/reset', 'ForgotPasswordController@resetPassword')->name('send.link.reset.password');
    Route::post('/password/reset', 'ForgotPasswordController@saveResetPassword');
});

Route::prefix('shopping')->group(function () {
    Route::get('/add/{id}', 'ShoppingCartController@addProduct')->name('add.shopping.cart');
    Route::get('/list-cart', 'ShoppingCartController@listShoppingCart')->name('list.shopping.cart');
    Route::get('/delete/{id}', 'ShoppingCartController@deleteCartItem')->name('delete.shopping.cart');
    Route::get('/update', 'ShoppingCartController@updateShoppingCart')->name('update.shopping.cart');
});

Route::group(['prefix' => 'admin/transaction'], function () {
    Route::get('/', 'AdminTransactionController@index')->name('admin.list.transaction');
    Route::get('/view/{id}', 'AdminTransactionController@viewOrder')->name('admin.view.order');
});
Route::get('/admin/transaction/update-status/{id}', 'AdminTransactionController@updateStatus');

Route::group(['prefix' => 'admin/contact'], function () {
    Route::get('/', 'AdminContactController@index')->name('admin.contact');
});

Route::group(['prefix' => 'shopping-cart', 'middleware' => 'CheckLoginUser'], function () {
    Route::get('/pay', 'ShoppingCartController@formPay')->name('form.pay');
    Route::post('/pay', 'ShoppingCartController@saveInforShoppingCart');
    Route::get('/pay-online', 'ShoppingCartController@showFormPay')->name('form.pay_online');
    Route::post('/pay-online', 'ShoppingCartController@savePayOnine');
});

Route::get('/checkout-success', 'ShoppingCartController@checkoutSuccess');

Route::get('register/verify/{code}', 'Auth\RegisterController@verifyUser')->name('verify.user');
// chart
Route::get('/api-get-chart-data', 'AdminTransactionController@getChartDataApi');
Route::get('/api-get-pie-chart-data', 'AdminTransactionController@getPieChartDataApi');

Route::get('/api-get-data-to-time', 'AdminTransactionController@getDataToTimeApi');

Route::group(['prefix' => 'ajax', 'middleware' => 'CheckLoginUser'], function () {
    Route::post('/rating/{id}', 'RatingController@saveRating')->name('post.rating.product');
});

Route::group(['prefix' => 'rating'], function () {
    Route::get('/', 'AdminRatingController@index')->name('admin.list.rating');
});

