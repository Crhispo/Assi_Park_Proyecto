<?php

namespace App\Http\Controllers;

use App\Models\Parqueadero;
use App\Models\Apartamento;
use App\Models\Vehiculo;
use App\Models\Detalle_asignacion;
use App\Models\parqueadero_visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin($id=null)
    {
        $parqueadero=Parqueadero::all();
        $cantidadres=DB::select('select ResidentesTotales() as residente');
        $cantidadveh=DB::select('select VehiculosTotales() as vehiculos');
        $NumeroApto=Apartamento::all();
        $vehiculo=Vehiculo::all();
        $parqueaderoV=parqueadero_visita::all();
        if($id==null){
            $asignacion=new Detalle_asignacion();
         }else{
            $asignacion=Detalle_asignacion::findOrFail($id);
         }
        return view('Dashboards.Dashboard_admin', compact('cantidadveh','cantidadres','parqueadero','parqueaderoV','vehiculo','NumeroApto','asignacion'));

    }

    public function secretaria()
    {
        return view('Dashboards.Dashboard_secretaria');
    }

    public function guarda()
    {
        return view('Dashboards.Dashboard_guarda');
    }

    public function redirecion()
    {
        if (auth()->user()->ID_TIPO_USUARIO  == 1) {
            return redirect('/admin');
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 2) {
            return redirect('/secretatia');
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 3) {
            return redirect('/guarda');
        } else {
            return redirect('/');
        }
    }


}
