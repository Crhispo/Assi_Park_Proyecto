<?php

namespace App\Http\Controllers;

use App\Models\tipo_parqueaderos_vehiculos;
use Illuminate\Http\Request;

class tipo_parqueadero_vehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //mostar
    function show()
    {
        $tipo = tipo_parqueaderos_vehiculos::all();
        return view('tipo/lista', ['tipo' => $tipo]);
    }
    //eliminar
    function delete($id)
    {
        $tipo = tipo_parqueaderos_vehiculos::find($id);
        $tipo->delete();
        return redirect('/tipo');
    }
    //crear
    function form($id = null)
    {
        if ($id == null) {
            $tipo = new tipo_parqueaderos_vehiculos();
        } else {
            $tipo = tipo_parqueaderos_vehiculos::findOrFail($id);
        }
        return view('$tipo/form', ['$tipo' => $tipo]);
    }
    function save(Request $request)
    {
        $tipo = new tipo_parqueaderos_vehiculos();
        if ($request->id > 0) {
            $tipo = tipo_parqueaderos_vehiculos::findOrFail($request->id);
        }

        $tipo->tipo = $request->tipo;

        $tipo->save();
        return redirect('/tipo');
    }
}
