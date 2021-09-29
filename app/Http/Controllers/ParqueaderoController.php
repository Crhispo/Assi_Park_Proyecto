<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parqueadero;
use App\Models\tipo_parqueaderos_vehiculos;

class ParqueaderoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //listar parqueadero
    function show()
    {
        $parqueaderoList = Parqueadero::all();
        return view('parqueadero/list', ['parqueaderoList' => $parqueaderoList]);
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
        if ($id == null) {
            $parqueadero = new Parqueadero();
        } else {
            $parqueadero = Parqueadero::findOrFail($id);
        }

        return view('parqueadero/form', ['parqueadero' => $parqueadero]);
    }
    function save(Request $request)
    {
        $parqueadero = new Parqueadero();
        if ($request->id > 0) {
            $parqueadero = Parqueadero::findOrFail($request->id);
        }
        $parqueadero->Tipo_parqueadero = $request->Tipo_parqueadero;
        $parqueadero->Tamano = $request->Tamano;
        $parqueadero->Descripcion = $request->Descripcion;
        $parqueadero->Estado = $request->Estado;
        $parqueadero->save();
        return redirect('/parqueadero');
    }
}
