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





// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'AdminController@index')->name('admin');



/*after laratrust*/
Route::namespace('web')->group(function () {
    Route::get('/', 'IndexController@index');
    Route::get('dynamicLabAnalysis/fetch', 'IndexController@fetchAnalysis')->name('dynamicLabAnalysis.fetch');
    Route::get('/addToCard', 'IndexController@addToCard')->name('addToCard');
    Route::get('/removeItem/{id}', 'IndexController@removeItem');
    Route::get('/checkout', 'IndexController@checkOutForm')->name('checkout');
    Route::post('/sendNewsLetter', 'IndexController@sendNewsLetter');
    //remove from cart
    Route::get('/removeCartItem/{id}', 'IndexController@removeCartItem');


    /**scan  addScanCard */
    Route::get('dynamicLabScan/fetch', 'IndexController@fetchScan')->name('dynamicLabScan.fetch');
    Route::get('/addScanCard', 'IndexController@addScanCard')->name('addScanCard');
    Route::get('/removeScanItem/{id}', 'IndexController@removeScanItem');
    Route::get('/savingCart', 'IndexController@SavingCart')->name('SavingCart');
    Route::get('/orderDetails/{id}', 'IndexController@orderDetails')->name('orderDetails');
    Route::post('/patientData', 'IndexController@patientData')->name('patientData');
    Route::get('/comparePrice/{id}', 'IndexController@comparePrice');

    /* static Data */
    Route::get('/about', 'StaticDataController@index');
    Route::get('/contact', 'StaticDataController@contact');

});
