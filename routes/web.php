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
    return view('welcome');
});
//show detail product
Route::get('/products/{id}','ProductController@show');
Route::get('/products','ProductController@index');

//list cats
Route::get('/cats','CatController@index')->name('list-cat');
Route::get('/category','CategoryController@index')->name('list-category');
Route::get('category/{id}','CategoryController@show')->name('showproduct');
//create show form cats
Route::get('/cats/create','CatController@create')->name('form-create-cat');
Route::post('/cats','CatController@store')->name('store-cat');
//delete cats
Route::get('/cats/{id}','CatController@destroy')->name('delete-cat');// có thể sử dụng route delete
Route::get('/breed/{id}','BreedController@show')->name('breed-id');

//list all post of country example hasManythour
Route::get('/countries/{id}/posts','CountryController@listPostBycountryId')->name('listPostBycountryId');

