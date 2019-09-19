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

Route::get('/', ['as' => 'trang-chu', 'uses' => 'HomeController@index'])->name('home');

Route::get('trang-chu', ['as' => 'trang-chu', 'uses' => 'HomeController@index']);

Route::get('gioi-thieu', ['as' => 'gioi-thieu', 'uses' => 'AboutController@index']);

Route::get('san-pham', ['as' => 'san-pham', 'uses' => 'ProductController@index']);

Route::get('tin-tuc', ['as' => 'tin-tuc', 'uses' => 'NewsController@index']);

Route::get('hoat-dong', ['as' => 'hoat-dong', 'uses' => 'EventController@index']);

Route::get('tuyen-si-dai-ly', ['as' => 'tuyen-si-dai-ly', 'uses' => 'AgencyController@index']);

Route::get('lien-he', ['as' => 'lien-he', 'uses' => 'ContactController@index']);

Route::get('san-pham/{category}', ['as' => 'danh-muc', 'uses' => 'CategoryController@index']);

Route::get('gio-hang', ['as' => 'gio-hang', 'uses' => 'CartController@index']);

Route::get('them-gio-hang/{id}', ['as' => 'them-gio-hang', 'uses' => 'CartController@addToCart']);

Route::patch('cap-nhat-gio-hang', ['as' => 'cap-nhat-gio-hang', 'uses' => 'CartController@updateCart']);
 
Route::delete('xoa-gio-hang', ['as' => 'xoa-gio-hang', 'uses' => 'CartController@removeCart']);

Route::get('thanh-toan', ['as' => 'thanh-toan', 'uses' => 'CheckoutController@index']);