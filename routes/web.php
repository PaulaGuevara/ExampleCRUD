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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//movie
Route::resource('movie', 'MovieController');
Route::get('movie/destroy/{id}',['as' => 'movie/destroy', 'uses' => 'MovieController@destroy']);
Route::post('movie/show',['as' => 'movie/show', 'uses' => 'MovieController@show']);
Route::post('movie/update/{id}',['as' => 'movie/update', 'uses' => 'MovieController@update']);  

//type status
Route::resource('typestatus', 'TypeStatusController');
Route::get('typestatus/destroy/{id}',['as' => 'typestatus/destroy', 'uses' => 'TypeStatusController@destroy']);
Route::post('typestatus/update/{id}',['as' => 'typestatus/update', 'uses' => 'TypeStatusController@update']);  

//status
Route::resource('status', 'StatusController');
Route::get('status/destroy/{id}',['as' => 'status/destroy', 'uses' => 'StatusController@destroy']);
Route::post('status/update/{id}',['as' => 'status/update', 'uses' => 'StatusController@update']);  

//categories
Route::resource('categories', 'CategoriesController');
Route::get('categories/destroy/{id}',['as' => 'categories/destroy', 'uses' => 'CategoriesController@destroy']);
Route::post('categories/update/{id}',['as' => 'categories/update', 'uses' => 'CategoriesController@update']);  

//users
Route::resource('user', 'UserController');
Route::get('user/destroy/{id}',['as' => 'user/destroy', 'uses' => 'UserController@destroy']);
Route::post('user/update/{id}',['as' => 'user/update', 'uses' => 'UserController@update']);  

//roles
Route::resource('roles', 'RolesController');
Route::get('roles/destroy/{id}',['as' => 'roles/destroy', 'uses' => 'RolesController@destroy']);
Route::post('roles/update/{id}',['as' => 'roles/update', 'uses' => 'RolesController@update']);  

//rentals
Route::resource('rentals', 'RentalsController');
Route::get('rentals/destroy/{id}',['as' => 'rentals/destroy', 'uses' => 'RentalsController@destroy']);
Route::post('rentals/show',['as' => 'rentals/show', 'uses' => 'RentalsController@show']);
Route::post('rentals/update/{id}',['as' => 'rentals/update', 'uses' => 'RentalsController@update']);  