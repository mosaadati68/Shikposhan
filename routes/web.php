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

Route::get('/', function () {
    $countCart = count(Cart::content());

    return view('welcome',['Cart' => Cart::content(), 'total' => Cart::total(), 'countCart'=>$countCart]);
});

//Route::group(['prefix' => 'api'], function()
//{
Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('authenticate', 'AuthenticateController@authenticate');
Route::get('isauthenticate', 'AuthenticateController@authenticate');
//    Route::post('register', 'AuthenticateController@register');
//    Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
//});
Route::resource('gallery', 'GalleryController');
Route::post('upload-file', 'GalleryController@uploadImage');
Route::post('delete-single-image', 'GalleryController@deleteSingleImage');

Route::get('products', 'ProductController@index');
Route::post('cart', 'CartController@addCart');
Route::get('showCart', 'CartController@showCart');
Route::post('deleteCartItem', 'CartController@deleteCart');
Route::post('updateCartItem', 'CartController@updateCart');
Route::get('countCart', 'CartController@countCart');
Route::post('updateProduct', 'ProductController@updateProduct');
Route::post('searchTerm', 'ProductController@searchTerm');
Route::post('filterPrice', 'ProductController@filterPrice');