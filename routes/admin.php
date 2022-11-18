<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::controller(AdminController::class)->group(function(){

    Route::get('','admin')->name('admin');

    Route::get('/contenido','adminContent')->name('admin.contenido');
    
    Route::get('/users','adminUser')->name('admin.user');

});