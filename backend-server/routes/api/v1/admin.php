<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\AdminAuthController;
use App\Http\Controllers\Api\Admin\SliderController;
use App\Http\Controllers\Api\Admin\BrandController;
use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\SubCategoryController;
use App\Http\Controllers\Api\Admin\ProductController;
use App\Http\Controllers\Api\Admin\DivisionController;

Route::controller(AdminAuthController::class)->group(function(){

    Route::post('/login', 'login');

});


Route::middleware('auth:admin-api')->group(function () {

    Route::controller(AdminAuthController::class)->group(function(){
        Route::get('/me', 'user');
        Route::post('/logout', 'logout');
    });

    Route::apiResources([
        'sliders' => SliderController::class,
        'brands' => BrandController::class,
        'categories' => CategoryController::class,
        'subcategories' => SubCategoryController::class,
        'products' => ProductController::class,
        'divisions' => DivisionController::class,
    ]);


});
