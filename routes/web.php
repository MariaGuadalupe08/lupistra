<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prueba;
use App\Http\Controllers\proveedorController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\clienteController;
use App\Models\clienteModel;
use Illuminate\Http\Request;


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
    return view('bienvenido');
});

//Ruta para enviar un mensaje por URL

Route::get('/nuevo', function(){
    return "Hola que tal estudiantes de informática";
});

//Ruta para mostrar una vista

Route::view('/vista-prueba', 'prueba');

//Ruta para enviar parámetros por medio de la ruta

Route::view('/vista-prueba', 'prueba', ['variable'=>'Punto de venta']);

//Ruta para llamar una vista desde un controlador

Route::get('/prueba-controller', [prueba::class, 'mostrar']);

//Ruta para recibir parámetros en la URL
Route::get('/nueva-vista', function (Request $request){
    return "Hola" .$request->get('variable');
});

//Ruta para recibir parámetros en la URL por medio del controlador

Route::get('/parametros{id}', [prueba::class, 'recibirParametros']);


//grupo de rutas desde una vista

Route::prefix('/ruta')->group(function(){
    Route::name('ruta.')->group(function(){
        Route::get ('/users', function(){
            return view ('prueba',['variable'=>'Mercado pago']);
        })->name('users');

        Route::get('/users/crear', [prueba::class, 'create'])->name('users.create');
        Route::get('/users/show', [prueba::class, 'show'])->name('users.show');
        Route::get('/users/edit', [prueba::class, 'edit'])->name('users.edit');
        Route::get('/users/detele', [prueba::class, 'destroy'])->name('users.destroy');
    });

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('proveedores', proveedorController::class);
Route::resource('productos', productoController::class);
Route::resource('clientes', clienteController::class);

Route::group(['middleware'=>['auth']], function(){

});





