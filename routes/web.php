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

/*localhost/dashboard/
localhost/dashboard/products*/
Route::get('train','TrainController@querybuilder');
Route::get('orm','TrainController@orm');
Route::get('relationships','TrainController@relationships');
Route::get('poly_relationships','TrainController@poly_relationships');

Route::namespace('Dashboard')->name('dashboard.')->prefix('admin')->group(function(){
    Route::get('/','DashboardController@index')->name('home');
    Route::resource('posts','PostController');
    Route::resource('users','UserController');
    Route::resource('categories','CategoryController');
})
;


Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('frontsite.home');
})->name('frontsite.home');

Route::get('view', function () {
    return view('frontsite.view');
})->name('frontsite.view');
Route::get('contact', function () {
    return view('frontsite.contact');
})->name('frontsite.contact');
Route::get('bestdeal', function () {
    return view('frontsite.bestdeal');
})->name('frontsite.bestdeal');
