<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;


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

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::controller(UserController::class)->group(function(){

    Route::get('/register', 'showRegister')->name('registro');

    Route::post('/register','register');
    
    Route::get('/login', 'show')->name('login');
    
    Route::post('/login/','login')->name('login.post');

    //Visualizar datos
    Route::get('edit/{registro}', 'edit')->name('auth.edit');

    Route::put('edit/{registro}', 'update')->name('edit.update');

    //Acceder a vista ajustes
    Route::get('home/ajustes','ajustes')->name('home.ajustes');

    Route::get('delete/','delete')->name('delete');


    Route::get('logout','logout')->name('logout');

});

