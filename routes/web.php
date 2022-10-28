<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::controller(HomeController::class)->group(function(){

    //Vista home de videos
    Route::get('/home','index')->name('home.index');

    Route::get('home/create/contenido','create')->name('home.create');

    Route::post('home/store/contenido', 'store')->name('store.contenido');

    Route::get('/home/{contenido}/edit','edit')->name('home.edit');

    Route::put('/home/{contenido}','update')->name('edit.contenido.update');

    //Acceder a vista ajustes
    Route::get('home/ajustes/','ajustes')->name('home.ajustes');

    Route::delete('edit/{contenido}','destroy')->name('registro.contenido.destroy');


});



Route::controller(UserController::class)->group(function(){

    Route::get('/register', 'showRegister')->name('registro');

    Route::post('/register','register');
    
    Route::get('/login', 'show')->name('login');
    
    Route::post('/login/','login')->name('login.post');

    //Visualizar datos
    Route::get('edit/{registro}/edit', 'edit')->name('auth.edit');

    Route::put('edit/{registro}', 'update')->name('edit.update');


    Route::get('logout/','logout')->name('logout');

    Route::delete('edit/{registro}','destroy')->name('registro.destroy');


});

