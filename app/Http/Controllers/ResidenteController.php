<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Bloque;
use App\Models\Numero_Apartamento;
use App\Models\Residente;
use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $residentes=DB::select('select NUMERO_IDENTIFICACION,NUMERO_IDENTIFICACION,ID_TIPO_IDENTIFICACION,NOMBRE,APELLIDO,SEXO,TELEFONO,CELULAR1,CELULAR2,CORREO_ELECTRONICO, CONCAT(numeroapartamento.NUMERO_APTO," ",bloque.BLOQUE) as apartamento, ESTADO_RESIDENTE from residente inner join apartamento on residente.ID_APARTAMENTO = apartamento.ID_APARTAMENTO inner join numeroapartamento on apartamento.NUMERO_APTO = numeroapartamento.id inner join bloque on apartamento.BLOQUE = bloque.id');


        return view('residente.index',compact('residentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $residente = Residente::all();
        $TiposId = TipoIdentificacion::all();
        $NumeroApto = Numero_Apartamento::all();
        $Bloque = Bloque::all();
        
        
        return view('residente.create',compact('residente','TiposId','NumeroApto','Bloque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'NUMERO_IDENTIFICACION'=>'required|Integer', /*|unique*/
            'ID_TIPO_IDENTIFICACION'=>'required',
            'NOMBRE'=>'required|String|max:45',
            'APELLIDO'=>'required|String|max:45',
            'SEXO'=>'required',
            'TELEFONO'=>'Integer',
            'CELULAR1'=>'required|Integer',
            'CELULAR2'=>'Integer',
            'CORREO_ELECTRONICO'=>'required|String|max:100',
            'NUMERO_APTO'=>'required',
            'BLOQUE'=>'required'
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            /*'unique'=>'El :attribute ya existe',*/
            'Integer'=> 'El :attribute debe ser numerico',
            'String'=>' El :attribute debe ser solo texto'
        ];
    
        $this->validate($request, $campos, $mensaje);


        $datosResidente = request()->except('_token','NUMERO_APTO','BLOQUE');
        $datosResidentex = request()->except('_token');
        
        $ID_APARTAMENTO = DB::select('select ID_APARTAMENTO from apartamento where NUMERO_APTO = '.$datosResidentex['NUMERO_APTO'].' AND BLOQUE = '.'"'.$datosResidentex['BLOQUE'].'"');

        $datosResidente['ID_APARTAMENTO']=$ID_APARTAMENTO[0]-> {'ID_APARTAMENTO'};
        
        Residente::insert($datosResidente);
        //return response()->json($datosResidente);
        return redirect('/residente')->with('mensaje','Residente agregado con éxito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function show(Residente $residente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function edit($NUMERO_IDENTIFICACION)
    {
        
        $TiposId=TipoIdentificacion::all();
        $NumeroApto=Numero_Apartamento::all();
        $Bloque=Bloque::all();
        $residente=Residente::findOrFail($NUMERO_IDENTIFICACION);

        $datosapartamento=DB::select('select apartamento.NUMERO_APTO, apartamento.BLOQUE from apartamento where ID_APARTAMENTO = '.$residente['ID_APARTAMENTO']);

        return view('residente.edit', compact('residente','TiposId','NumeroApto','Bloque','datosapartamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NUMERO_IDENTIFICACION)
    {
        $datosResidente = request()->except(['_token','_method','NUMERO_APTO','BLOQUE']);
        $datosResidentex = request()->except(['_token','_method']);

        //$datosResidente = request()->except('_token','NUMERO_APTO','BLOQUE');
        //$datosResidentex = request()->except('_token');

        $ID_APARTAMENTO = DB::select('select ID_APARTAMENTO from apartamento where NUMERO_APTO = '.$datosResidentex['NUMERO_APTO'].' AND BLOQUE = '.'"'.$datosResidentex['BLOQUE'].'"');

        $datosResidente['ID_APARTAMENTO']=$ID_APARTAMENTO[0]-> {'ID_APARTAMENTO'};

        Residente::where('NUMERO_IDENTIFICACION','=',$NUMERO_IDENTIFICACION)->update($datosResidente);


        $residente=Residente::findOrFail($NUMERO_IDENTIFICACION);
        //return view('residente.edit', compact('residente'));
        return redirect('/residente')->with('mensaje','Residente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $NUMERO_IDENTIFICACION)
    {
        //
        $variable = request();
        $apartamento=DB::update('update residente set ESTADO_RESIDENTE = '.$variable->{'ESTADO_RESIDENTE'}.' where NUMERO_IDENTIFICACION = '.$NUMERO_IDENTIFICACION);
        return redirect('/residente')->with('mensaje','Cambio de estado de residente con éxito'); 
    }
}
