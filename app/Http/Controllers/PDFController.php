<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\User;
use App\Models\Vehiculo;
use App\Models\Apartamento;
use App\Models\Parqueadero;
use App\Models\parqueadero_visita;
use Illuminate\Support\Facades\DB;
use App\Models\Visitante;
use App\Models\Residente;

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

public function PDFResidentes(){
   $residnte = Residente::all();
   $pdf = PDF::loadView('PDF/ReportResidente', compact('residnte'));
   return $pdf->stream('Residentes.pdf');
}


//REPORTES CON VEHICULOS

public function PDFVehiculos(){
   $vehicl = Vehiculo::all();
   $pdf = PDF::loadView('PDF/ReportVehiculos', compact('vehicl'));
   return $pdf->stream('Vehiculos.pdf');
}

public function PDFVehiculoResidente(){
   $vehicl = DB::SELECT("SELECT id,marca.MARCA ,placa , tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO , residente.NOMBRE , residente.APELLIDO , residente.NUMERO_IDENTIFICACION , residente.CELULAR1 FROM vehiculos inner JOIN residente on residente.NUMERO_IDENTIFICACION = vehiculos.NUMERO_IDENTIFICACION inner join marca on marca.ID_MARCA = vehiculos.marca_id inner join tipo_de_parqueadero_vehiculo on tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO = vehiculos.tipo_parqueadero_id");
   $pdf = PDF::loadView('PDF/ReportVehiculoResidente', compact('vehicl'));
   return $pdf->setPaper('a4','landscape')->stream('VehiculoResidente.pdf');
}

public function PDFVehiculoVisitante(){
   $vehicl2 = DB::SELECT("SELECT id,marca.MARCA ,placa , tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO , visitante.NOMBRE , visitante.APELLIDO , visitante.NUMERO_DOCUMENTO , visitante.CELULAR1 FROM vehiculos inner JOIN visita on vehiculos.id = visita.ID_VEHICULO inner join visitante on visitante.ID_VISITANTE = visita.ID_VISITANTE inner join marca on marca.ID_MARCA = vehiculos.marca_id inner join tipo_de_parqueadero_vehiculo on tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO = vehiculos.tipo_parqueadero_id");
   $pdf = PDF::loadView('PDF/ReportVehiculoVisitante', compact('vehicl2'));
   return $pdf->setPaper('a4','landscape')->stream('VehiculoVisitante.pdf');
}

//REPORTES CON APARTAMENTOS
public function PDFapartamentos(){
   $aptos =DB::SELECT("SELECT CONCAT( numeroapartamento.NUMERO_APTO,' ',BLOQUE.BLOQUE)AS apartamento ,NUMERO_DOCUMENTO,NOMBRE,APELLIDO,CELULAR1, FECHA_HORA_INICIO_VISITA,FECHA_HORA_FIN_VISITA FROM apartamento inner JOIN visita on apartamento.ID_APARTAMENTO = visita.ID_APARTAMENTO RIGHT JOIN visitante on visita.ID_VISITANTE = visitante.ID_VISITANTE INNER JOIN bloque ON apartamento.BLOQUE = bloque.id INNER JOIN numeroapartamento ON numeroapartamento.id = apartamento.NUMERO_APTO");
   $pdf = PDF::loadView('PDF/ReportApartamentos', compact('aptos'));
   return $pdf->setPaper('a4','landscape')->stream('Apartamentos.pdf');
}


//REPORTES CON PARQUEADEROS

public function PDFParqueaderosLibres(){
   $parqdero = DB::SELECT("SELECT id ,tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO,TAMAÑO,DESCRIPCION,OCUPADO FROM parqueaderos inner join tipo_de_parqueadero_vehiculo on parqueaderos.tipo_parqueadero_id = tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO WHERE parqueaderos.OCUPADO = 0");
   $parqdero2 = DB::SELECT("SELECT id ,tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO,TAMAÑO,DESCRIPCION,OCUPADO FROM parqueadero_visitas inner join tipo_de_parqueadero_vehiculo on parqueadero_visitas.tipo_parqueadero_id = tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO WHERE parqueadero_visitas.OCUPADO = 0");
   $pdf = PDF::loadView('PDF/ReportParqueaderosLibres', compact('parqdero','parqdero2'));
   return $pdf->stream('ParqueaderosLibres.pdf');
}




public function PDFParqueaderosOcupados(){
   $parqdero = DB::SELECT("SELECT parqueaderos.id,tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO ,marca.MARCA ,placa ,residente.NUMERO_IDENTIFICACION ,NOMBRE , APELLIDO ,CONCAT(numeroapartamento.NUMERO_APTO,'' ,bloque.BLOQUE)as apartamento from parqueaderos inner join detalle_asignaciones on detalle_asignaciones.parqueadero_id = parqueaderos.id inner join residente on detalle_asignaciones.apartamento_id = residente.ID_APARTAMENTO inner join tipo_de_parqueadero_vehiculo on tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO = parqueaderos.id INNER JOIN vehiculos ON detalle_asignaciones.vehiculo_id = vehiculos.id INNER JOIN MARCA on marca.ID_MARCA = vehiculos.marca_id inner join apartamento on apartamento.ID_APARTAMENTO = residente.ID_APARTAMENTO inner join bloque on apartamento.BLOQUE = bloque.id inner join numeroapartamento on numeroapartamento.id = apartamento.NUMERO_APTO");
   $parqdero2 = DB::SELECT("SELECT parqueadero_visitas.id,tipo_de_parqueadero_vehiculo.TIPO_PARQUEADERO_VEHICULO ,marca.MARCA ,placa ,visitante.NUMERO_DOCUMENTO ,NOMBRE , APELLIDO ,CONCAT(numeroapartamento.NUMERO_APTO,'' ,bloque.BLOQUE)as apartamento from parqueadero_visitas inner join visita on visita.NUMERO_PARQUEADERO = parqueadero_visitas.id inner join visitante on visita.ID_VISITANTE = visitante.ID_VISITANTE inner join tipo_de_parqueadero_vehiculo on tipo_de_parqueadero_vehiculo.ID_TIPO_PARQUEADERO_VEHICULO = parqueadero_visitas.id INNER JOIN vehiculos ON visita.ID_VEHICULO = vehiculos.id INNER JOIN MARCA on marca.ID_MARCA = vehiculos.marca_id inner join apartamento on apartamento.ID_APARTAMENTO = visitante.ID_VISITANTE inner join bloque on apartamento.BLOQUE = bloque.id inner join numeroapartamento on numeroapartamento.id = apartamento.NUMERO_APTO");
   $pdf = PDF::loadView('PDF/ReportParqueaderosOcupados', compact('parqdero','parqdero2'));
   return $pdf->setPaper('a4','landscape')->stream('ParqueaderosOcupados.pdf');
}




}
