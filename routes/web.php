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

//Route::view('/hello', 'hello', ['name' => 'Abdul Aziz']);

Route::get('/hai', function () {
    return view('hello', ['name' => 'abdaziz']);
});

Route::get('/products/{id}', function ($productId) {
    return "Product : " . $productId;
});

Route::get('/products/{id}/items/{item}', function ($productId, $itemId) {
    return "Product : " . $productId . ", Item : " . $itemId;
});

Route::get('/categories/{id}', function ($categoryId) {
    return "Categories : " . $categoryId;
})->where('id', '[0-9]+');

Route::get('/hello', [\App\Http\Controllers\HelloController::class, 'hello']);

Route::get('/cookie/set', [\App\Http\Controllers\CookieController::class, 'createCookie']);
