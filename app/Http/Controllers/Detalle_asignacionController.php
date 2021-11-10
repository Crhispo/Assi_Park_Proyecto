<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;
use App\Models\Detalle_asignacion;
use App\Models\Parqueadero;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class Detalle_asignacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //listar parqueadero
    function show(){


        $asignacionList=DB::select('select id,detalle_asignaciones.apartamento_id, detalle_asignaciones.vehiculo_id, detalle_asignaciones.parqueadero_id, detalle_asignaciones.inicio, detalle_asignaciones.fin
        from detalle_asignaciones 
        inner join apartamento on detalle_asignaciones.apartamento_id =apartamento.ID_APARTAMENTO
        inner join vehiculos on detalle_asignaciones.vehiculo_id=vehiculos.id
        inner join parqueaderos on detalle_asignaciones.parqueadero_id=parqueaderos.id');

        return view('Asignacion/lista', compact('asignacionList'));
    }
    //eliminar
    function delete($id){
        $asignacion=Detalle_asignacion::find($id);
        $asignacion->delete();
        return redirect('/asignacion');
            }
            //crear
    function form($id=null){
                $NumeroApto=Apartamento::all();
                $vehiculo=Vehiculo::all();
                $parqueadero=Parqueadero::all();
                if($id==null){
                    $asignacion=new Detalle_asignacion();
                 }else{
                    $asignacion=Detalle_asignacion::findOrFail($id);
                 }

                return view('asignacion/form', compact('vehiculo','parqueadero','NumeroApto','asignacion'));
            }
            function save(Request $request){
                $asignacion=new Detalle_asignacion();
                if ($request->id>0) {
                    $asignacion=Detalle_asignacion::findOrFail($request->id);
                }
            $asignacion->apartamento_id=$request->NUMERO_APTO;
            $asignacion->vehiculo_id=$request->Vehiculo;
            $asignacion->parqueadero_id=$request->parqueadero;
            $asignacion->inicio=$request->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO;
            $asignacion->fin=$request->FECHA_FIN_DE_ASIGNACION_PARQUEADERO;
            $asignacion->save();
                return redirect('/admin');
            }
}
