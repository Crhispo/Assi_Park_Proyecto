<?php

namespace App\Http\Controllers;

use App\Models\Numero_Apartamento;
use Illuminate\Http\Request;

class NumeroAptoController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $NumeroApto = Numero_Apartamento::all();
        //$Bloque = Bloque::all();
        return view('apartamento.create',compact('NumeroApto'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $NumeroApto = request()->except('_token');

        Numero_Apartamento::insert($NumeroApto);
        //return response()->json($datosResidente);
        return redirect('/apartamento');

    }
}
