<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::namespace('Admin')->group(function () {

    Route::resource('/admin', 'UserAdminController');
    Route::get('/analysis-orders/{id}', 'UserAdminController@analysisOrders')->name('analysis-orders');
    Route::get('/scan-orders/{id}', 'UserAdminController@scanOrders')->name('scan-orders');
    Route::resource('/analysis', 'AnalysisController');
 Route::get('/lab-analysis/{id}', 'AnalysisController@getData')->name('lab-analysis');
 Route::resource('/scan', 'ScanController');
 Route::get('/lab-scan/{id}', 'ScanController@getData')->name('lab-scan');

 Route::resource('/scan-status', 'ScanStatusController');
 Route::resource('/analysis-status', 'AnalysisStatusController');

});
