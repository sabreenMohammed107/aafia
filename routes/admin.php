<?php

Auth::routes();
Route::namespace('Admin')->group(function () {
    
    Route::resource('/admin', 'UserAdminController');


    

});