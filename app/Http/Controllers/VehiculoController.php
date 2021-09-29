<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //mostar
    function show()
    {
        $vehiculoList = Vehiculo::all();
        return view('vehiculo/lista', ['vehiculoList' => $vehiculoList]);
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
        if ($id == null) {
            $vehiculo = new Vehiculo();
        } else {
            $vehiculo = Vehiculo::findOrFail($id);
        }
        return view('vehiculo/form', ['vehiculo' => $vehiculo]);
    }
    function save(Request $request)
    {

        $vehiculo = new Vehiculo();
        if ($request->id > 0) {
            $vehiculo = Vehiculo::findOrFail($request->id);
        }
        $vehiculo->NUMERO_IDENTIFICACION = $request->Numero_de_identificacion_propietario;
        $vehiculo->marca_id = $request->Marca;
        $vehiculo->color_id = $request->Color;
        $vehiculo->tipo_parqueadero_id = $request->Tipo_parqueadero;
        $vehiculo->placa = $request->Placa;
        $vehiculo->ESTADO_VEHICULO = $request->estado;
        $vehiculo->save();
        return redirect('/vehiculo');

    }
}
