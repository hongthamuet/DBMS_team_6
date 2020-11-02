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

Route::get('/', function(){
    return view('welcome');
});
/*
Route::get('/', function () {
    return view('admin_layout');
});*/
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
Route::get('/all-author', 'App\Http\Controllers\AuthorController@all_author');
Route::get('/add-author', 'App\Http\Controllers\AuthorController@add_author');
Route::post('/save-author', 'App\Http\Controllers\AuthorController@save_author');