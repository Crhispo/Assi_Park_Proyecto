<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;

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
    public function edit($id)
    {
        //
        $apartamento=Apartamento::findOrFail($id);
        return view('apartamento.edit', compact('apartamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $datosApartamento = request()->except(['_token','_method']);
        Apartamento::where('id','=',$id)->update($datosApartamento);

        $apartamento=Apartamento::findOrFail($id);
        return view('apartamento.edit', compact('apartamento'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartamento $apartamento)
    {
        //
    }
}
