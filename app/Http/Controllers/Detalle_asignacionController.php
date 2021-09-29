<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle_asignacion;

class Detalle_asignacionController extends Controller
{

    //listar parqueadero
    function show(){
        $asignacionList=Detalle_asignacion::all();
        return view('Asignacion/lista',['asignacionList'=>$asignacionList]);
    }
    //eliminar
    function delete($id){
        $asignacion=Detalle_asignacion::find($id);
        $asignacion->delete();
        return redirect('/asignacion');
            }
            //crear
            function form($id=null){
                if($id==null){
                    $asignacion=new Detalle_asignacion(); 
                 }else{
                    $asignacion=Detalle_asignacion::findOrFail($id);
                 }

                return view('asignacion/form',['asignacion'=>$asignacion]);
            }
            function save(Request $request){
                $asignacion=new Detalle_asignacion();
                if ($request->id>0) {
                    $asignacion=Detalle_asignacion::findOrFail($request->id);
                }
            $asignacion->APARTAMENTO_ID_APARTAMENTO=$request->APARTAMENTO_ID_APARTAMENTO;
            $asignacion->ID_VEHICULO=$request->ID_VEHICULO;
            $asignacion->NUMERO_PARQUEADERO=$request->NUMERO_PARQUEADERO;
            $asignacion->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO=$request->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO;
            $asignacion->save();
                return redirect('/asignacion');
            }
}
