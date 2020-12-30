<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);


Route::group(['prefix' => 'control', 'middleware' => 'auth'], function() {
	Route::group(['prefix' => 'category'], function() {
		Route::get('all', [CategoriesController::class, 'index'])->name('category.all');
		Route::get('create', [CategoriesController::class, 'create'])->name('category.create');
		Route::post('store', [CategoriesController::class, 'store'])->name('category.store');
		Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
		Route::put('update/{id}', [CategoriesController::class, 'update'])->name('category.update');
		Route::get('delete/{id}', [CategoriesController::class, 'destroy'])->name('category.delete');
	});

	Route::group(['prefix' => 'gift'], function() {
		Route::get('all', [GiftsController::class, 'index'])->name('gift.all');
		Route::get('create', [GiftsController::class, 'create'])->name('gift.create');
		Route::post('store', [GiftsController::class, 'store'])->name('gift.store');
		Route::get('edit/{id}', [GiftsController::class, 'edit'])->name('gift.edit');
		Route::put('update/{id}', [GiftsController::class, 'update'])->name('gift.update');
		Route::get('delete/{id}', [GiftsController::class, 'destroy'])->name('gift.delete');
	});
});

Route::get('/dashboard', function () {
    return view('control.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

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
