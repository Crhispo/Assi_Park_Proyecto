<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\parqueadero_visita;
use App\Models\Vehiculo;
use App\Models\visita;
use App\Models\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitaController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    //listar parqueadero
    function show(){


        $visita=DB::select('select id, visita.ID_APARTAMENTO, visita.ID_VISITANTE, visita.ID_VEHICULO, visita.NUMERO_PARQUEADERO, visita.USUARIO_NUMERO_IDENTIFICACION, visita.FECHA_HORA_INICIO_VISITA,visita.FECHA_HORA_FIN_VISITA
        from visita 
        inner join apartamento on visita.ID_APARTAMENTO =apartamento.ID_APARTAMENTO
        inner join visitante on visita.ID_VISITANTE =visitante.ID_VISITANTE
        inner join vehiculos on visita.ID_VEHICULO=vehiculos.id
        inner join parqueadero_visitas on visita.NUMERO_PARQUEADERO=parqueadero_visitas.id
        inner join usuario on visita.USUARIO_NUMERO_IDENTIFICACION=usuario.NUMERO_IDENTIFICACION '

    );

        return view('visita/Visita', compact('visita'));
    }
    //eliminar 
    function delete($id){
        $visita=visita::find($id);
        $visita->delete();
        return redirect('/admin');
            }
            //crear
    function form($id=null){
                $NumeroApto=Apartamento::all();
                $vehiculo=Vehiculo::all();
                $vis=Visitante::all();
                $parqueaderoV=parqueadero_visita::all();
                if($id==null){
                    $visita=new visita();
                 }else{
                    $visita=visita::findOrFail($id);
                 }

                return view('visita/Visita', compact('vehiculo','parqueaderoV','NumeroApto','visita','vis'));
            }
            function save(Request $request){
                $visita=new visita();
                if ($request->id>0) {
                    $visita=visita::findOrFail($request->id);
                }
            $visita->ID_APARTAMENTO=$request->NUMERO_APTO;
            $visita->ID_VISITANTE=$request->Visitante;
            $visita->ID_VEHICULO=$request->Vehiculo;
            $visita->NUMERO_PARQUEADERO=$request->parqueadero2;
            $nom=DB::update('update parqueadero_visitas set OCUPADO = 1 where id ='.$visita->NUMERO_PARQUEADERO);
            $visita->FECHA_HORA_INICIO_VISITA=$request->FECHA_INICIO_DE_ASIGNACION_PARQUEADERO;
            $visita->FECHA_HORA_FIN_VISITA=$request->FECHA_FIN_DE_ASIGNACION_PARQUEADERO;
            $visita->save();
                return redirect('/admin');
            }
}
