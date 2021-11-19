<?php

namespace App\Http\Controllers;

use App\Models\parqueadero_visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tipo_parqueaderos_vehiculos;

class ParqueaderoVisitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //listar parqueadero
    function show()
    {
        $parqueaderoVList = DB::select('select id,tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO,TAMAÑO,DESCRIPCION,ESTADO_PARQUEADERO
        from parqueadero_visitas inner join tipo_de_parqueadero_vehiculo on parqueadero_visitas.tipo_parqueadero_id=tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO');
        return view('parqueaderoV/list', compact('parqueaderoVList'));
    }
    //eliminar
    function delete($id)
    {
        $parqueaderoV = parqueadero_visita::find($id);
        $parqueaderoV->delete();
        return redirect('/parqueaderoV');
    }
    //crear
    function form($id = null)
    {
        $tipo=tipo_parqueaderos_vehiculos::all();
        if ($id == null) {
            $parqueaderoV = new parqueadero_visita();
        } else {
            $parqueaderoV = parqueadero_visita::findOrFail($id);
        }

        return view('parqueaderoV/form', compact('tipo','parqueaderoV'));
    }
    function save(Request $request)
    {
        $parqueaderoV = new parqueadero_visita();
        if ($request->id > 0) {
            $parqueaderoV = parqueadero_visita::findOrFail($request->id);
        }
        $parqueaderoV->tipo_parqueadero_id = $request->tipo;
        $parqueaderoV->TAMAÑO = $request->TAMAÑO;
        $parqueaderoV->DESCRIPCION = $request->DESCRIPCION;
        $parqueaderoV->ESTADO_PARQUEADERO = $request->Estado;
        $parqueaderoV->save();
        return redirect('/parqueaderoV');
    }
    public function Disable(Request $request, $id)
    {
        $parqueaderoV = parqueadero_visita::all();
        $parqueaderosV = $request;
        $Disable_Usuario = DB::update('update parqueadero_visitas set ESTADO_PARQUEADERO = ' . $parqueaderosV->{'ESTADO_PARQUEADERO'} . ' where id = ' . $id);
        return redirect('/parqueadero');
    }
}
