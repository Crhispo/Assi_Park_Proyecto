<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parqueadero;
use App\Models\tipo_parqueaderos_vehiculos;
use Illuminate\Support\Facades\DB;

class ParqueaderoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //listar parqueadero
    function show()
    {
        $parqueaderoList = DB::select('select id,tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO,TAMAÑO,DESCRIPCION,ESTADO_PARQUEADERO
        from parqueaderos inner join tipo_de_parqueadero_vehiculo on parqueaderos.tipo_parqueadero_id=tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO');
        return view('parqueadero/list', compact('parqueaderoList'));
    }
    //eliminar
    function delete($id)
    {
        $parqueadero = Parqueadero::find($id);
        $parqueadero->delete();
        return redirect('/parqueadero');
    }
    //crear
    function form($id = null)
    {
        $tipo=tipo_parqueaderos_vehiculos::all();
        if ($id == null) {
            $parqueadero = new Parqueadero();
        } else {
            $parqueadero = Parqueadero::findOrFail($id);
        }

        return view('parqueadero/form', compact('tipo','parqueadero'));
    }
    function save(Request $request)
    {
        $parqueadero = new Parqueadero();
        if ($request->id > 0) {
            $parqueadero = Parqueadero::findOrFail($request->id);
        }
        $parqueadero->tipo_parqueadero_id = $request->tipo;
        $parqueadero->TAMAÑO = $request->TAMAÑO;
        $parqueadero->DESCRIPCION = $request->DESCRIPCION;
        $parqueadero->ESTADO_PARQUEADERO = $request->Estado;
        $parqueadero->save();
        return redirect('/parqueadero');
    }
}
