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
/*
Route::get('/', function(){
    return view('welcome');
});
*/

//frontend
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
Route::post('/tim-kiem', 'App\Http\Controllers\HomeController@tim_kiem');

//Danh mục Thể loại sách frontend
Route::get('/danh-muc-sp/{id}', 'App\Http\Controllers\CategoryProduct@show_category_home');
Route::get('/tac-gia/{id}', 'App\Http\Controllers\AuthorController@show_author_home');
Route::get('/chi-tiet-san-pham/{id}', 'App\Http\Controllers\ProductController@show_product_detail');

//Backend
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@log_out');

//Category product
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');

Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');

Route::get('/unactive-category-product/{id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{id}', 'App\Http\Controllers\CategoryProduct@active_category_product');
Route::post('/update-category-product/{id}', 'App\Http\Controllers\CategoryProduct@update_category_product');
Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product');

//author

Route::get('/add-author', 'App\Http\Controllers\AuthorController@add_author');
Route::get('/edit-author/{id}', 'App\Http\Controllers\AuthorController@edit_author');
Route::get('/delete-author/{id}', 'App\Http\Controllers\AuthorController@delete_author');

Route::get('/all-author', 'App\Http\Controllers\AuthorController@all_author');

Route::get('/unactive-author/{id}', 'App\Http\Controllers\AuthorController@unactive_author');
Route::get('/active-author/{id}', 'App\Http\Controllers\AuthorController@active_author');

Route::post('/save-author', 'App\Http\Controllers\AuthorController@save_author');

Route::post('/update-author/{id}', 'App\Http\Controllers\AuthorController@update_author');

//product
Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/edit-product/{id}', 'App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{id}', 'App\Http\Controllers\ProductController@delete_product');

Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');

Route::get('/unactive-product/{id}', 'App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{id}', 'App\Http\Controllers\ProductController@active_product');

Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{id}', 'App\Http\Controllers\ProductController@update_product');

//Thêm vào giỏ hàng
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::post('/update-cart-quantity', 'App\Http\Controllers\CartController@update_cart_quantity');
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{id}', 'App\Http\Controllers\CartController@delete_to_cart');


//Thanh toán
Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');
Route::post('/order-place', 'App\Http\Controllers\CheckoutController@order_place');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@checkout');
Route::post('/save-checkout-customer', 'App\Http\Controllers\CheckoutController@save_checkout_customer');

//Đơn hàng
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment');
Route::get('/manage-order', 'App\Http\Controllers\CheckoutController@manage_order');