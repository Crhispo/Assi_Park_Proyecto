<?php

namespace App\Http\Controllers;

use App\Models\Parqueadero;
use App\Models\Apartamento;
use App\Models\Vehiculo;
use App\Models\Detalle_asignacion;
use App\Models\parqueadero_visita;
use App\Models\visita;
use App\Models\Visitante;
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
        $asignacionList=DB::select('select detalle_asignaciones.apartamento_id, detalle_asignaciones.vehiculo_id, detalle_asignaciones.parqueadero_id, detalle_asignaciones.inicio, detalle_asignaciones.fin
        from detalle_asignaciones 
        inner join apartamento on detalle_asignaciones.apartamento_id =apartamento.ID_APARTAMENTO
        inner join vehiculos on detalle_asignaciones.vehiculo_id=vehiculos.id
        inner join parqueaderos on detalle_asignaciones.parqueadero_id=parqueaderos.id');
        
        $parqueadero=Parqueadero::all();
        $cantidadres=DB::select('select ResidentesTotales() as residente');
        $cantidadveh=DB::select('select VehiculosTotales() as vehiculos');
        $NumeroApto=DB::select('SELECT ID_APARTAMENTO,BLOQUE.BLOQUE,numeroapartamento.NUMERO_APTO
        FROM apartamento INNER JOIN bloque ON apartamento.BLOQUE=bloque.id
        INNER JOIN numeroapartamento ON apartamento.NUMERO_APTO=numeroapartamento.id');
        $vis=Visitante::all();
        $vehiculo=Vehiculo::all();
        $parqueaderoV=parqueadero_visita::all();
        if($id==null){
            $vista=new visita();
         }else{
            $vista=visita::findOrFail($id);
         }
        if($id==null){
            $asignacion=new Detalle_asignacion();
         }else{
            $asignacion=Detalle_asignacion::findOrFail($id);
         }
        return view('Dashboards.Dashboard_admin', compact('cantidadveh','vista','cantidadres','parqueadero','parqueaderoV','vehiculo','NumeroApto','asignacion','vis','asignacionList'));

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
