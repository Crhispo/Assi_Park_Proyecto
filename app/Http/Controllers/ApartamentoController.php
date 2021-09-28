<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApartamentoRequest;
use App\Models\Apartamento;
use App\Models\Bloque;
use App\Models\Numero_Apartamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $apartamento=DB::select('Select numeroapartamento.NUMERO_APTO, bloque.BLOQUE, ESTADO_APTO, ID_APARTAMENTO from apartamento inner join bloque on apartamento.BLOQUE = bloque.id inner join numeroapartamento on apartamento.NUMERO_APTO = numeroapartamento.id');
        return view('apartamento.index',compact('apartamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $NumeroApto=Numero_Apartamento::all();
        $Bloque=Bloque::all();
        return view('apartamento.create',compact('NumeroApto','Bloque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApartamentoRequest $request)
    {
        //
        $datosApartamento = request()->except('_token');
        Apartamento::insert($datosApartamento);

        //return response()->json($datosApartamento);
        return redirect('/apartamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function show(Apartamento $apartamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_APARTAMENTO)
    {
        //
        $apartamento=Apartamento::findOrFail($ID_APARTAMENTO);
        return view('apartamento.edit', compact('apartamento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID_APARTAMENTO)
    {
        $datosApartamento = request()->except(['_token','_method']);
        Apartamento::where('ID_APARTAMENTO','=',$ID_APARTAMENTO)->update($datosApartamento);

        $apartamento=Apartamento::findOrFail($ID_APARTAMENTO);
        //return view('apartamento.edit', compact('apartamento')); 
        return redirect('/apartamento');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $ID_APARTAMENTO)
    {
        //
        $variable = request();
        $apartamento=DB::update('update apartamento set ESTADO_APTO = '.$variable->{'ESTADO_APTO'}.' where ID_APARTAMENTO = '.$ID_APARTAMENTO);
        return redirect('/apartamento'); 
    }
}
