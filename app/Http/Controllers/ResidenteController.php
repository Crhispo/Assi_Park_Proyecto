<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use Illuminate\Http\Request;

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
    public function edit($id)
    {
        //
        $residente=Residente::findOrFail($id);
        return view('residente.edit', compact('residente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosResidente = request()->except(['_token','_method']);
        Residente::where('id','=',$id)->update($datosResidente);

        $residente=Residente::findOrFail($id);
        return view('residente.edit', compact('residente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residente $residente)
    {
        //
    }
}
