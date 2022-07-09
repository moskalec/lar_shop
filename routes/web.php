<?php

use App\Models\Category;
use App\Models\Product;
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

Route::group(['namespace' => 'Product'], function() {
    Route::get('/', 'IndexController');
    Route::get('/products/filter/{category_id}', 'IndexController@get_filtered_products')->name('product.filtered');
    Route::get('/products/all', 'IndexController@fetch_all')->name('product.all');
    Route::get('/products', 'IndexController')->name('product.index');
    Route::get('/products/create', 'CreateController')->name('product.create');
    Route::post('/products', 'StoreController')->name('product.store');
    Route::get('/products/{product}', 'ShowController')->name('product.show');
    Route::get('/products/{product}/edit', 'EditController')->name('product.edit');
    Route::patch('/products/{product}/update', 'UpdateController')->name('product.update');
    Route::delete('/products/{product}/delete', 'DestroyController')->name('product.delete');
});

Route::group(['namespace' => 'Category'], function() {
    Route::get('/categories', 'IndexController')->name('category.index');
    Route::get('/categories/create', 'CreateController')->name('category.create');
    Route::post('/categories', 'StoreController')->name('category.store');
    Route::get('/categories/{category}', 'ShowController')->name('category.show');
    Route::get('/categories/{category}/edit', 'EditController')->name('category.edit');
    Route::patch('/categories/{category}/update', 'UpdateController')->name('category.update');
    Route::delete('/categories/{category}/delete', 'DestroyController')->name('category.delete');
});
