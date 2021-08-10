<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagination;



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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('ingredient', function () {
    return view('ingredient');
});

Route::get('pagination', [Pagination::class, 'products']);




/* Route::resource('products', '/Http/Controllers/ProductController');


 Route::get('/ingredient', '/Http/Controllers/ProductController@ingredients');*/
