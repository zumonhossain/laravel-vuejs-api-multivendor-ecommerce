<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\AuthController;



Route::controller(AuthController::class)->group(function(){

    Route::post('/login', 'login');

});
