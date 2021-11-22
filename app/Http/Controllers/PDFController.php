<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\User;
use App\Models\Vehiculo;
use App\Models\Apartamento;

class PDFController extends Controller
{
   public function PDFusuarios(){
   $usu = User::all();
   $pdf = PDF::loadView('PDF/ReportUsuario', compact('usu'));
   return $pdf->stream('Usuarios.pdf');
}
public function PDFVehiculos(){
   $vehicl = Vehiculo::all();
   $pdf = PDF::loadView('PDF/ReportVehiculos', compact('vehicl'));
   return $pdf->stream('Vehiculos.pdf');
}

public function PDFapartamentos(){
   $aptos = Apartamento::all();
   $pdf = PDF::loadView('PDF/ReportApartamentos', compact('aptos'));
   return $pdf->stream('Apartamentos.pdf');
}




}
