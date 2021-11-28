<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Reporte de Vehiculos</title>
</head>
<body>
  <style>
 
 
  body{
    font-family: "Poppins", sans-serif;
  }

.h2{

	text-align: center;
	font-size: 25pt;
	margin-left:-419px;
	color: #3e6ccf;
	font-weight: bold;
}
.h1{
	
	text-align: center;
	font-size: 16pt;
	margin-left:-419px;
}
.h3{

	font-size: 12pt;
	display: block;
	background: #0a4661;
	color: #FFF;
	text-align: center;
	padding: 3px;
	margin-bottom: 5px;
}
#page_pdf{
	width: 95%;
	margin: 15px auto 10px auto;
}

#factura_head, #factura_cliente, #factura_detalle{
	width: 100%;
	margin-bottom: 10px;
}
.logo_factura{
	width: 25%;
}
.info_empresa{
	width: 50%;
	text-align: center;
}
.info_factura{
	width: 25%;
}
.info_cliente{
	width: 100%;
}
.datos_cliente{
	width: 100%;
}
.datos_cliente tr td{
	width: 50%;
}
.datos_cliente{
	padding: 10px 10px 0 10px;
}
.datos_cliente label{
	width: 75px;
	display: inline-block;
}
.datos_cliente p{
	display: inline-block;
}

.textright{
	text-align: right;
}
.textleft{
	text-align: left;
}
.textcenter{
	text-align: center;
}
.round{
	border-radius: 10px;
	border: 1px solid #0a4661;
	overflow: hidden;
	padding-bottom: 15px;
}
.round p{
	padding: 0 15px;
}

#factura_detalle{
	border-collapse: collapse;
}
#factura_detalle thead th{
	background: #2196F3;
	color: #FFF;
	padding: 5px;
}
#detalle_productos tr:nth-child(even) {
    background: #ededed;
}
#detalle_totales span{
	font-family: 'BrixSansBlack';
}
.nota{
	font-size: 8pt;
}
.label_gracias{
	font-family: verdana;
	font-weight: bold;
	font-style: italic;
	text-align: center;
	margin-top: 20px;
}
.anulada{
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translateX(-50%) translateY(-50%);
}

  </style>

  <!-- <img class="anulada" src="public\Img\LOGO_FINAL_ASSIPARK.png" alt="Anulada"> -->
    <div id="page_pdf">
    <table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
				 <img src="public\Img\LOGO_FINAL_ASSIPARK.png" type="image/png"> 
				</div>
			</td>
			<td class="info_empresa">
				<div>
					<span class="h2">REPORTE DE VEHICULOS</span><br>
					
				</div>
			</td>
	
		</tr>
	</table>


    <table  id="factura_detalle">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col" class="textleft">Identificación</th>
      <th scope="col" class="textleft">Marca</th>
      <th scope="col" class="textleft">Placa</th>
    </tr>
  </thead>
  <tbody>
      @foreach($vehicl as $Vehiculo)
    <tr>
      <th scope="row">{{$Vehiculo->id }}</th>
      <td>{{$Vehiculo->NUMERO_IDENTIFICACION}}</td>
      <td>{{$Vehiculo->marca_id}}</td>
      <td>{{$Vehiculo->placa}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
    </div>
    
</body>
</html>