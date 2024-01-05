<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvoiceController;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return 'hola soy una ruta';
})->name('saludo');

/*Route::get('/suma', function () {

    $a = 5;
    $b = 10;
    $suma = $a + $b;

    return $suma;
})->name('operacion');*/

/*Route::get('/nombre/{nombre}', function (string $nombre) {
    return 'Mi nombre es '.$nombre;
})->name('tu.nombre');;*/

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    return $postId + $commentId;
});

Route::get('/user/{name}', function (string $name) {
    return $name;
    // ...
})->where('name', '[A-Za-z]+');

//Route::permanentRedirect('/publicaciones', 'http://localhost/LARAVEL/proyecto/public/articulos');
Route::redirect('/publicaciones', '/LARAVEL/proyecto/public/articulos', 302);
Route::get('/articulos', function(){
    return 'Estoy en articulos';
});


Route::get('/redirigir', function(){
    return redirect()->route('saludo');
});

Route::get('/verificar', function(){
    if (Request::route()->named('verify')) {
        return "OK";
    }else{
        return "no es la ruta";
    }
})->name('verify');


/*Route::namespace('Admin')->group(function (){
    Route::get('/micontroller1',[AdminController::class, 'index1']);
    Route::get('/micontroller2',[AdminController::class, 'index2']);
    Route::get('/micontroller3',[AdminController::class, 'index3']);
});*/

/*Route::group(['namespace' => 'Admin'], function(){
    
});*/

Route::prefix('seccion')->group(function () {
    Route::get('/primera', function () {
        return 'Primera';
    });
    Route::get('/segunda', function () {
        return 'Segunda';
    });
    Route::get('/tercera', function () {
        return 'Tercera';
    });
});
Route::view('/', 'welcome', ['mensaje' => 'este es un mensaje random']);
//Route::view('/', 'child');

Route::get('/nombre/{name}', [UserController::class, 'showname']);
Route::get('/inicio', [UserController::class, 'index']);
Route::get('/suma/{num?}', [UserController::class, 'suma']);

Route::namespace('Admin')->group(function(){
    Route::get('/admin', [AdministratorController ::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/invoice', [InvoiceController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
