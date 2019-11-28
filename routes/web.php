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
//show detail product fdsaf
Route::get('/products/{id}','ProductController@show');
Route::get('/products','ProductController@index');

//list cats
Route::get('/cats','CatController@index')->name('list-cat');
Route::get('/category','CategoryController@index')->name('list-category');
Route::get('category/{id}','CategoryController@show')->name('showproduct');
//create show form cats

Route::post('/cats','CatController@store')->name('store-cat');
//delete cats
Route::get('/cats/{id}','CatController@destroy')->name('delete-cat');// có thể sử dụng route delete
Route::get('/breed/{id}','BreedController@show')->name('breed-id');
//edit cat
Route::get('/cats/{id}/edit','CatController@edit')->name('cat-edit');
//update
Route::put('/cats/{id}', 'CatController@update')->name('cat-update');

//list all post of country example hasManythour
Route::get('/countries/{id}/posts','CountryController@listPostBycountryId')->name('listPostBycountryId');

//delete breed
Route::delete('/breed/{id}','BreedController@destroy')->name('breed-destroy');
Route::get('/breeds','BreedController@index')->name('breed.index');
Route::get('/breeds/{id}','BreedController@show')->name('show-breed');
// show all cat of breed theo id
Route::get('/breed/{id}/cat','BreedController@showCat')->name('cateOfBreed');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin',
             'middleware' => ['IsAdmin'],//phải là admin mới vào được 2 route ở dưới
             //'namespace'  => 'Admin'  thêm folder để phân biệt
             //'as' => 'admin.' nối thêm vào ví dụ phải nối thêm admin.admin/cats/create
            ], function () {
    Route::get('/cats/create','CatController@create')->name('form-create-cat');

});
Route::get('/api/cats/{id}','API\CatController@destroy');
