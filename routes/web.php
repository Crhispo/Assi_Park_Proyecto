<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidenteController;
use App\Http\Controllers\NumeroAptoController;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\datosController;
use App\Http\Controllers\ParqueaderoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\tipo_parqueadero_vehiculoController;
use App\Http\Controllers\Detalle_asignacionController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ParqueaderoVisitaController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\VisitanteController;
use App\Models\Parqueadero;
use App\Models\parqueadero_visita;
use App\Models\visita;
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

Route::get('/Datos', [datosController::class, 'admin'])->name('admin');
 /* Rutas Usuario */
Route::get('Usuario', [UsuarioController::class, 'index'])->name('usuario.index');
route::get('Usuarioform', [UsuarioController::class, 'formcreate'])->name('usuario.formcreate');
Route::post('Usuariostore', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('Usuarioedit{id}', [UsuarioController::class, 'formedit'])->name('usuario.formedit');
Route::put('Usuarioupdate', [UsuarioController::class, 'update'])->name('Usuario.update');
Route::delete('Usuariodisable{id}', [UsuarioController::class, 'Disable'])->name('Usuario.Disable');

 /* Rutas Visitante */

 Route::get('Visitante', [VisitanteController::class, 'index'])->name('Visitante.index');
route::get('Visitanteform', [VisitanteController::class, 'formcreate'])->name('Visitante.formcreate');
Route::post('Visitantestore', [VisitanteController::class, 'store'])->name('Visitante.store');
Route::get('Visitanteedit{id}', [VisitanteController::class, 'formedit'])->name('Visitante.formedit');
Route::put('Visitanteupdate', [VisitanteController::class, 'update'])->name('Visitante.update');
Route::delete('Visitantedisable{id}', [VisitanteController::class, 'Disable'])->name('Visitante.Disable');

/* Rutas modulo apartamento */
/*Route::resource('apartamento', ApartamentoController::class);*/


Route::get('apartamento', [ApartamentoController::class, 'index'])->name('Apartamento.index');
Route::get('apartamentocreate', [ApartamentoController::class, 'create'])->name('apartamento.create');
Route::post('apartamento', [ApartamentoController::class, 'store'])->name('apartamento.store');
Route::get('apartamento{apartamento}edit', [ApartamentoController::class, 'edit'])->name('apartamento.edit');
Route::PUT('apartamento{apartamento}', [ApartamentoController::class, 'update']);
Route::delete('apartamento{apartamento}', [ApartamentoController::class, 'destroy']);


Route::post('NumeroApto', [NumeroAptoController::class,'store']);
Route::post('bloque', [BloqueController::class,'store']);

/* Rutas modulo residente */

/*Route::resource('residente', ResidenteController::class);*/

Route::get('residente', [ResidenteController::class, 'index'])->name('Apartamento.index');
Route::get('residentecreate', [ResidenteController::class, 'create'])->name('apartamento.create');
Route::post('residenteform', [ResidenteController::class, 'store'])->name('apartamento.store');;
Route::get('residente{residente}edit', [ResidenteController::class, 'edit'])->name('apartamento.edit');
Route::PUT('residente{residente}', [ResidenteController::class, 'update']);
Route::delete('residente{residente}', [ResidenteController::class, 'destroy']);

//parqueadero visita
Route::get('/parqueaderoV', [ParqueaderoVisitaController::class, 'show'])->name('parqueaderoV.show');
route::get('/parqueaderoVform{id?}', [ParqueaderoVisitaController::class, 'form'])->name('parqueaderoV.form');
route::post('/parqueaderoV/save', [ParqueaderoVisitaController::class, 'save'])->name('parqueaderoV.save');

//visita
Route::get('/visita', [VisitaController::class, 'show'])->name('visita.show');
route::get('/visitaform{id?}', [VisitaController::class, 'form'])->name('visita.form');
route::post('/visita/save', [VisitaController::class, 'save'])->name('visita.save');

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
Route::delete('Parqueaderodisable{id}', [ParqueaderoController::class, 'Disable'])->name('Parqueadero.Disable');
Route::delete('Vehiculodisable{id}', [VehiculoController::class, 'Disable'])->name('Usuario.Disable');
//ver la vista para crear vehiculos
route::get('/vehiculoform{id?}', [VehiculoController::class, 'form'])->name('vehiculo.form');
route::get('/parqueaderoform{id?}', [ParqueaderoController::class, 'form'])->name('parqueadero.form');
route::get('/tipo/form{id?}', [tipo_parqueadero_vehiculoController::class, 'form'])->name('tipo.form');
route::get('/asignacionform{id?}', [Detalle_asignacionController::class, 'form'])->name('asignacion.form');

//guardar vehiculos
route::post('/vehiculo/save', [VehiculoController::class, 'save'])->name('vehiculo.save');
route::post('/parqueadero/save', [ParqueaderoController::class, 'save'])->name('parqueadero.save');
route::post('/tipo/save', [tipo_parqueadero_vehiculoController::class, 'save'])->name('tipo.save');
route::post('/asignacion/save', [Detalle_asignacionController::class, 'save'])->name('asignacion.save');


//ruta de la vista administrador
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

//ruta de la vista residente
Route::get('/secretaria', [HomeController::class, 'secretaria'])->name('residente');

//ruta de la vista guarda
Route::get('/guarda', [HomeController::class, 'guarda'])->name('guarda');

//Ruta para Reportes PDF
// Route::get('/pdf','PDFController@PDF')->name('descargarPDF');
Route::get('/pdfUsuario','App\Http\Controllers\PDFController@PDFusuarios')->name('descargarPDFUsuario');
Route::get('/pdfVisitante','App\Http\Controllers\PDFController@PDFusuariosVisitantes')->name('descargarPDFVisitantes');

Route::get('/pdfVehiculo','App\Http\Controllers\PDFController@PDFVehiculos')->name('descargarPDFVehiculo');
Route::get('/pdfApartamentos','App\Http\Controllers\PDFController@PDFapartamentos')->name('descargarPDFApartamentos');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {return view('Index.homepage');})->name('homepage');

Route::get('/Organization', function () {return view('Plantilla_recursos.Organization');})->name('Organization');

Route::get('/redirecion', [HomeController::class, 'redirecion'])->name('redirecion');


Route::post('/evento/agragar', [EventoController::class, 'store'])->name('evento');

Route::get('/evento/mostrar', [EventoController::class, 'show']);

Route::post('/evento/editar/{id}', [EventoController::class, 'edit']);

Route::post('/evento/borrar/{id}', [EventoController::class, 'destroy']);

Route::post('/evento/actualizar/{evento}', [EventoController::class, 'update']);


Route::get('/CambioContrasena/reset', function () {return view('Auth.passwords.emailChange');})->name('CambioContrasena');