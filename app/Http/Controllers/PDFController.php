<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\User;
use App\Models\Vehiculo;
use App\Models\Apartamento;
use Illuminate\Support\Facades\DB;
use App\Models\Visitante;


//REPORTES CON USUARIOS
class PDFController extends Controller
{
   public function PDFusuarios(){
   $usu = User::all();
   $pdf = PDF::loadView('PDF/ReportUsuario', compact('usu'));
   return $pdf->stream('Usuarios.pdf');
}



public function PDFusuariosVisitantes(){
   $visita = Visitante::all();
   $pdf = PDF::loadView('PDF/ReportVisitantes', compact('visita'));
   return $pdf->stream('Visitante.pdf');
}


//REPORTES CON VEHICULOS

public function PDFVehiculos(){
   $vehicl = Vehiculo::all();
   $pdf = PDF::loadView('PDF/ReportVehiculos', compact('vehicl'));
   return $pdf->stream('Vehiculos.pdf');
}


//REPORTES CON APARTAMENTOS
public function PDFapartamentos(){
   $aptos =DB::SELECT("SELECT CONCAT( numeroapartamento.NUMERO_APTO,' ',BLOQUE.BLOQUE)AS apartamento ,NUMERO_DOCUMENTO,NOMBRE,APELLIDO,CELULAR1, FECHA_HORA_INICIO_VISITA,FECHA_HORA_FIN_VISITA FROM apartamento inner JOIN visita on apartamento.ID_APARTAMENTO = visita.ID_APARTAMENTO RIGHT JOIN visitante on visita.ID_VISITANTE = visitante.ID_VISITANTE INNER JOIN bloque ON apartamento.BLOQUE = bloque.id INNER JOIN numeroapartamento ON numeroapartamento.id = apartamento.NUMERO_APTO");
   $pdf = PDF::loadView('PDF/ReportApartamentos', compact('aptos'));
   return $pdf->stream('Apartamentos.pdf');
}


//REPORTES CON PARQUEADEROS
}
