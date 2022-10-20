<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;

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

Route::get('/home', [HomeController::class, 'index']);
/*
Route::get('login', [Registrocontroller::class, 'index'])->name('login');

Route::get('registro', [Registrocontroller::class, 'create'])->name('registro');

Route::get('menu', [RegistroController::class, 'show'])->name('menu');*/
//Grupo de rutas registro
Route::controller(RegistroController::class)->group(function(){

    Route::get('registro/login', 'index')->name('registro.index');

    Route::get('registro/registro', 'create')->name('registro.create');

    Route::post('registro', 'store')->name('registro.store');
    
    Route::get('registro/{registro}/edit', 'edit')->name('registro.edit');

    //Put para actualizar
    Route::put('registro/{registro}', 'update')->name('registro.update');
    
    
    //Show seria la vista de perfil
    //Route::get('menu','show');
    //En la vista perfil se modificarian los datos

    //En la vista perfil se eliminaria la cuenta(registro)

});

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

//Route::post('/home', [HomeController::class, 'index']);


/*
Route::get('menu', function(){
    return view('menu');
});
*/