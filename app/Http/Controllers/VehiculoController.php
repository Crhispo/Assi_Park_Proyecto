<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Models\color;
use App\Models\marca;
use App\Models\Residente;
use App\Models\tipo_parqueaderos_vehiculos;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //mostar
    function show()
    {
        $vehiculoList = DB::select('select id,residente.NUMERO_IDENTIFICACION,Marca.MARCA, Color.COLOR, tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO, placa,ESTADO_VEHICULO
        from vehiculos INNER join Marca on vehiculos.marca_id=Marca.ID_MARCA
        LEFT join residente on vehiculos.NUMERO_IDENTIFICACION=residente.NUMERO_IDENTIFICACION
        inner join Color on vehiculos.color_id=Color.ID_COLOR
        inner join tipo_de_parqueadero_vehiculo on vehiculos.tipo_parqueadero_id=tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO');
        return view('vehiculo/lista', compact('vehiculoList'));
    }
    //eliminar
    function delete($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return redirect('/vehiculo');
    }

    //crear
    function form($id = null)
    {
        $marca = marca::all();
        $color = Color::all();
        $residente = Residente::all();
        $tipo = tipo_parqueaderos_vehiculos::all();
        if ($id == null) {
            $vehiculo = new Vehiculo();
        } else {
            $vehiculo = Vehiculo::findOrFail($id);
        }
        return view('vehiculo/form', compact('marca', 'residente', 'color', 'tipo', 'vehiculo'));
    }

    function save(Request $request)
    {



        $vehiculo = new Vehiculo();
        if ($request->id > 0) {
            $vehiculo = Vehiculo::findOrFail($request->id);
        }
        $vehiculo->NUMERO_IDENTIFICACION = $request->NUMERO_IDENTIFICACION;
        $vehiculo->marca_id = $request->marca;
        $vehiculo->color_id = $request->Color;
        $vehiculo->tipo_parqueadero_id = $request->tipo;
        $vehiculo->placa = $request->placa;
        $vehiculo->ESTADO_VEHICULO = $request->ESTADO_VEHICULO;
        $vehiculo->save();

        /*$campos=[
            'NUMERO_IDENTIFICACION'=>'required|Integer', |unique
            'marca_id'=>'required',
            'color_id'=>'required',
            'tipo_parqueadero_id'=>'required',
            'placa'=>'required'
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'unique'=>'El :attribute ya existe',
            'Integer'=> 'El :attribute debe ser numerico'
        ];
    
        $this->validate($request, $campos, $mensaje);
*/

        return redirect('/vehiculo')->with('mensaje','Vehiculo registrado con ??xito');
    }
    public function Disable(Request $request, $id)
    {
        $vehiculo = Vehiculo::all();
        $vehiculos = $request;
        $Disable_Usuario = DB::update('update vehiculos set ESTADO_VEHICULO = ' . $vehiculos->{'ESTADO_VEHICULO'} . ' where id = ' . $id);
        return redirect('/vehiculo');
    }
}
