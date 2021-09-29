<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartamentoController extends Controller
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
        //
        $datos['apartamentos']=Apartamento::paginate(5);
        return view('apartamento.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('apartamento.create');
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
