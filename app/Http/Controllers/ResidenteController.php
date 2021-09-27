<?php

namespace App\Http\Controllers;

use App\Models\Residente;
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
        $datos['residentes']=Residente::paginate(5);
        return view('residente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('residente.create');
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
        $datosResidente = request()->except('_token');
        Residente::insert($datosResidente);

        //return response()->json($datosResidente);
        return redirect('/residente');
        
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
        //
        $residente=Residente::findOrFail($NUMERO_IDENTIFICACION);
        return view('residente.edit', compact('residente'));
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
        $datosResidente = request()->except(['_token','_method']);
        Residente::where('NUMERO_IDENTIFICACION','=',$NUMERO_IDENTIFICACION)->update($datosResidente);

        $residente=Residente::findOrFail($NUMERO_IDENTIFICACION);
        //return view('residente.edit', compact('residente'));
        return redirect('/residente');  
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
        return redirect('/residente'); 
    }
}
