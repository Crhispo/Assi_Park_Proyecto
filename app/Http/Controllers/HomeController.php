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
    {$asignacion=Detalle_asignacion::all();
        $asignacionList=DB::select('select ID_APARTAMENTO,BLOQUE.BLOQUE,numeroapartamento.NUMERO_APTO,vehiculos.placa, detalle_asignaciones.vehiculo_id, detalle_asignaciones.parqueadero_id, detalle_asignaciones.inicio, detalle_asignaciones.fin
        from detalle_asignaciones 
                inner join apartamento on detalle_asignaciones.apartamento_id =apartamento.ID_APARTAMENTO
                inner join vehiculos on detalle_asignaciones.vehiculo_id=vehiculos.id
                inner join parqueaderos on detalle_asignaciones.parqueadero_id=parqueaderos.id
                inner join  bloque ON apartamento.BLOQUE=bloque.id
                INNER JOIN numeroapartamento ON apartamento.NUMERO_APTO=numeroapartamento.id
        WHERE parqueadero_id=parqueadero_id');
        $visita=DB::select('select  visita.ID_APARTAMENTO,BLOQUE.BLOQUE,numeroapartamento.NUMERO_APTO, visitante.NUMERO_DOCUMENTO, visitante.NOMBRE,visitante.APELLIDO,visitante.CELULAR1,visita.ID_VEHICULO,vehiculos.placa, visita.NUMERO_PARQUEADERO, visita.FECHA_HORA_INICIO_VISITA,visita.FECHA_HORA_FIN_VISITA
        from visita 
        inner join apartamento on visita.ID_APARTAMENTO =apartamento.ID_APARTAMENTO
        inner join visitante on visita.ID_VISITANTE =visitante.ID_VISITANTE
        inner join vehiculos on visita.ID_VEHICULO=vehiculos.id
        inner join parqueadero_visitas on visita.NUMERO_PARQUEADERO=parqueadero_visitas.id
        
        inner join  bloque ON apartamento.BLOQUE=bloque.id
                INNER JOIN numeroapartamento ON apartamento.NUMERO_APTO=numeroapartamento.id ');

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
        return view('Dashboards.Dashboard_admin', compact('visita','cantidadveh','vista','cantidadres','asignacion','parqueadero','parqueaderoV','vehiculo','NumeroApto','asignacion','vis','asignacionList'));

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
            return redirect('/Dashboard');
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 2) {
            return redirect('/Dashboard');
        } elseif (auth()->user()->ID_TIPO_USUARIO  == 3) {
            return redirect('/Dashboard');
        } else {
            return redirect('/');
        }
    }
        public function delete(Request $request, $parqueadero_id)
    {
        DB::delete('delete from detalle_asignaciones where parqueadero_id='.$parqueadero_id);
        DB::update('update parqueaderos set OCUPADO = 0 where id='.$parqueadero_id);
        return redirect('/Dashboard');
    }

    public function deleteV(Request $request, $NUMERO_PARQUEADERO)
    {
        DB::delete('delete from visita where NUMERO_PARQUEADERO='.$NUMERO_PARQUEADERO);
        DB::update('update parqueadero_visitas set OCUPADO = 0 where id='.$NUMERO_PARQUEADERO);
        return redirect('/Dashboard');
    }
    


}
