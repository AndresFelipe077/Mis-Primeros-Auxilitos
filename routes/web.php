<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Models\User;
use App\Models\SocialProfile;
use Illuminate\Support\Facades\Auth;


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

    Route::post('home/store/contenido', 'store')->name('contenido.store');

    Route::get('/home/{contenido}/edit','edit')->name('contenido.edit');

    Route::put('/home/{contenido}','update')->name('contenido.update');

    Route::delete('edit/{contenido}','destroy')->name('contenido.destroy');

    //Acceder a vista ajustes
    Route::get('home/ajustes/','ajustes')->name('home.ajustes');

});



Route::controller(UserController::class)->group(function(){

    Route::get('/registro', 'showRegister')->name('registro');

    Route::post('/registro/user','register')->name('registro.user');

    Route::get('/','show')->name('login');
    
    Route::get('/login', 'show')->name('login');
    
    Route::post('/login/','login')->name('login.post');

    //Visualizar datos
    Route::get('edit/{registro}/edit', 'edit')->name('auth.edit');

    Route::put('edit/{registro}', 'update')->name('edit.update');

    Route::get('logout/','logout')->name('logout');

    Route::delete('edit/{registro}/edit','destroy')->name('registro.destroy');

    //Registro exclusivo con google
    // Route::get('/login/google', 'redirectToGoogle')->name('login.google');
     
    // Route::get('/google/callback', 'handleGoogleCallback');

    // //FACEBOOK

    // Route::get('/login/facebook', 'redirectToFacebook')->name('login.facebook');

    // Route::get('/facebook/callback', 'handleFacebookCallback');

});

