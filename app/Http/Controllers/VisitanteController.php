<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitante;
use Illuminate\Support\Facades\DB;

class VisitanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_Visitante = Visitante::all();
        return view('Visitante.Visitantes', compact('_Visitante'));
    }


    public function formcreate()
    {

        return view('Visitante.registro_Visitante');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {


        Visitante::create([
            'ID_TIPO_IDENTIFICACION' => $request['tipo_identificacion'],
            'NUMERO_DOCUMENTO' => $request['NUMERO_DOCUMENTO'],
            'NOMBRE' => $request['nombre'],
            'APELLIDO' => $request['apellido'],
            'CELULAR1' => $request['celular1'],
            'CELULAR2' => $request['celular1'],
        ]);
        /*
                $campos=[
                    'ID_TIPO_IDENTIFICACION'=>'required', 
                    'NUMERO_DOCUMENTO'=>'required|Integer',
                    'NOMBRE'=>'required|String|max:45',
                    'APELLIDO'=>'required|String|max:45',
                    'CELULAR1'=>'required|Integer',
                    'CELULAR2'=>'Integer'
                ];
                $mensaje=[
                    'required'=>'El :attribute es requerido',
                    'Integer'=> 'El :attribute debe ser numerico',
                    'String'=>' El :attribute debe ser solo texto'
                ];
            
                $this->validate($request, $campos, $mensaje);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitante  $usuario
     * @return \Illuminate\Http\Response
     */


    public function formedit($ID_VISITANTE)
    {
        if ($ID_VISITANTE != null) {
            $Visitante = Visitante::where('ID_VISITANTE', '=', $ID_VISITANTE)->firstOrFail();
        }
        return view('Visitante.modificar', compact('Visitante'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitante  $usuario
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $NUMERO_IDENTIFICACION)
    {
        $_UsuarioD = request()->except(['_token', '_method']);
        $Final = '';
        $Final = Visitante::where('NUMERO_IDENTIFICACION', "=", $NUMERO_IDENTIFICACION)->update($_UsuarioD);
        return view('Visitante.Visitantes', compact('Final', '_UsuarioD'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitante  $usuario
     * @return \Illuminate\Http\Response
     */
    public function Disable(Request $request, $NUMERO_IDENTIFICACION)
    {
        $Visitante = $request;
        DB::update('update usuario set ESTADO_VISITANTE = ' . $Visitante->{'ESTADO_VISITANTE'} . ' where NUMERO_IDENTIFICACION = ' . $NUMERO_IDENTIFICACION);
        return redirect('/Visitante');
    }
}
