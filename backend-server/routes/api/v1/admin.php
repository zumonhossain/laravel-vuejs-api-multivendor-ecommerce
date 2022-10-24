<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\AdminAuthController;



Route::controller(AdminAuthController::class)->group(function(){

    Route::post('/login', 'login');

});


Route::middleware('auth:admin-api')->group(function () {

    Route::controller(AdminAuthController::class)->group(function(){
        Route::get('/me', 'user');
        Route::post('/logout', 'logout');
    });

});
