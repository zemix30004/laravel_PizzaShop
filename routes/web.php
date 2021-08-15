<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagination;
use App\Http\Controllers\MainController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('ingredient', function () {
//     return view('ingredient');
// });


Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');
Route::get('/basket', 'App\Http\Controllers\MainController@basket')->name('basket');
Route::get('/basket/place', 'App\Http\Controllers\MainController@basketPlace')->name('basket-place');
Route::get('/ingredient', 'App\Http\Controllers\MainController@ingredient')->name('ingredient');
Route::get('/pagination', [Pagination::class, 'products']);




/* Route::resource('products', '/Http/Controllers/ProductController');


 Route::get('/ingredient', '/Http/Controllers/ProductController@ingredients');*/
