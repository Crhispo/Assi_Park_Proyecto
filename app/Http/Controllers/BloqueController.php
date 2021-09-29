<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use Illuminate\Http\Request;

class BloqueController extends Controller
{
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Bloque = Bloque::all();
        return view('apartamento.create',compact('Bloque'));
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

        $Bloque = request()->except('_token');

        Bloque::insert($Bloque);
        //return response()->json($datosResidente);
        return redirect('/apartamento');

    }




}
