<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidenteController;
use App\Http\Controllers\ParqueaderoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\tipo_parqueadero_vehiculoController;
use App\Http\Controllers\Detalle_asignacionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('Modificar', function () {
    return view('Modulo_Usuarios.modificar');
});

Route::get('Usuario', [UsuarioController::class, 'index']);
Route::post('Usuario.store', [UsuarioController::class, 'store']);
Route::get('/Tabla', [UsuarioController::class, 'show']);
Route::put('Usuario.{id}', [UsuarioController::class, 'update'])->name('Usuario');
Route::delete('Usuario.{id}', [UsuarioController::class, 'disable']);

/* Rutas modulo apartamento */

Route::resource('apartamento', ApartamentoController::class);

/* Rutas modulo residente */

Route::resource('residente', ResidenteController::class);

//consultar
Route::get('/parqueadero', [ParqueaderoController::class, 'show'])->name('parqueadero.show');
Route::get('/vehiculo', [VehiculoController::class, 'show'])->name('vehiculo.show');
Route::get('/tipo', [tipo_parqueadero_vehiculoController::class, 'show'])->name('tipo.show');
Route::get('/asignacion', [Detalle_asignacionController::class, 'show'])->name('asignacion.show');

//eliminar
route::get('/vehiculo/delete/{id}', [VehiculoController::class, 'delete'])->name('eliminarvehiculo');
route::get('/parqueadero/delete/{id}', [ParqueaderoController::class, 'delete'])->name('eliminarparqueadero');
route::get('/tipo/delete/{id}', [tipo_parqueadero_vehiculoController::class, 'delete'])->name('eliminartipo');
route::get('/asignacion/delete/{id}', [Detalle_asignacionController::class, 'delete'])->name('eliminarasignacion');

//ver la vista para crear vehiculos
route::get('/vehiculo/form{id?}', [VehiculoController::class, 'form'])->name('vehiculo.form');
route::get('/parqueadero/form{id?}', [ParqueaderoController::class, 'form'])->name('parqueadero.form');
route::get('/tipo/form{id?}', [tipo_parqueadero_vehiculoController::class, 'form'])->name('tipo.form');
route::get('/asignacion/form{id?}', [Detalle_asignacionController::class, 'form'])->name('asignacion.form');

//guardar vehiculos
route::post('/vehiculo/save', [VehiculoController::class, 'save'])->name('vehiculo.save');
route::post('/parqueadero/save', [ParqueaderoController::class, 'save'])->name('parqueadero.save');
route::post('/tipo/save', [tipo_parqueadero_vehiculoController::class, 'save'])->name('tipo.save');
route::post('/asignacion/save', [Detalle_asignacionController::class, 'save'])->name('asignacion.save');


//ruta de la vista administrador
Route::get('/admin', [
    HomeController::class, 'admin'
])->name('admin');

//ruta de la vista residente
Route::get('/residente', [
    HomeController::class, 'residente'
])->name('residente');

//ruta de la vista guarda
Route::get('/guarda', [
    HomeController::class, 'guarda'
])->name('guarda');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function ()
{
    return view('Index.homepage');
}
)->name('homepage');
