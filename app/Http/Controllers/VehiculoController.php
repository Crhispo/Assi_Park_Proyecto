<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    //mostar
    function show(){
        $vehiculoList=Vehiculo::all();
        return view('vehiculo/lista',['vehiculoList'=>$vehiculoList]);
    }
    //eliminar
    function delete($id){
$vehiculo=Vehiculo::find($id);
$vehiculo->delete();
return redirect('/vehiculo');
    }
    //crear
    function form($id=null){
        if($id==null){
           $vehiculo=new Vehiculo(); 
        }else{
            $vehiculo=Vehiculo::findOrFail($id);
        }
        return view('vehiculo/form',['vehiculo'=>$vehiculo]);
    }
    function save(Request $request){

        
        $vehiculo=new Vehiculo();
        if ($request->id>0) {
            $vehiculo=Vehiculo::findOrFail($request->id);
        }
    $vehiculo->residente_id=$request->residente_id;
    $vehiculo->Marca=$request->Marca;
    $vehiculo->Color=$request->Color;
    $vehiculo->Tipo_parqueadero=$request->Tipo_parqueadero;
    $vehiculo->Placa=$request->Placa;
    $vehiculo->estado=$request->estado;
    $vehiculo->save();
        return redirect('/vehiculo');
    }

}
