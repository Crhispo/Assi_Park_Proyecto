<?php

namespace App\Http\Controllers;

use App\Models\Parqueadero;
use App\Models\Apartamento;
use App\Models\Vehiculo;
use App\Models\Detalle_asignacion;
use App\Models\parqueadero_visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class datosController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function admin($id=null)
    {
        $parqueadero=Parqueadero::all();
        $cantidadres=DB::select('select ResidentesTotales() as residente');
        $cantidadveh=DB::select('select VehiculosTotales() as vehiculos');
        $usuarios=DB::select('select usuarioTotales() as usuario');
        $visista=DB::select('select visitaTotales() as visitante');
        $NumeroApto=Apartamento::all();
        $vehiculo=Vehiculo::all();
        $parqueaderoV=parqueadero_visita::all();
        if($id==null){
            $asignacion=new Detalle_asignacion();
         }else{
            $asignacion=Detalle_asignacion::findOrFail($id);
         }
        return view('Datos.Datos', compact('usuarios','visista','cantidadveh','cantidadres','parqueadero','parqueaderoV','vehiculo','NumeroApto','asignacion'));
    }
}
