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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'AdminController@index')->name('admin');



/*after laratrust*/
Route::namespace('web')->group(function () {
    Route::get('/', 'IndexController@index');
    Route::get('dynamicLabAnalysis/fetch', 'IndexController@fetchAnalysis')->name('dynamicLabAnalysis.fetch');
    Route::get('/addToCard', 'IndexController@addToCard')->name('addToCard');
    Route::get('/removeItem/{id}', 'IndexController@removeItem');
    Route::get('/checkout', 'IndexController@checkOutForm')->name('checkout');
    Route::post('/sendNewsLetter', 'IndexController@sendNewsLetter');
});
