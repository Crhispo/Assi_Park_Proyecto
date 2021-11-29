<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Reporte de Visitantes</title>
</head>
<body>
<style>
 .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }


    body {
      /* position: relative;
      width: 21cm;
      height: 29.7cm; */
      margin: 0 auto;
      /* margin-left: 55px; */
      color:  #5D6975;
      background: #FFFFFF;
      font-family: "Poppins", sans-serif;
      font-size: 12px;
      
    }

    header {
      padding: 10px 0;
      margin-bottom: 30px;
    }

    

     h1 {
      /* width: 970px; */
      border-top: 5px solid #3e6ccf;
      border-bottom: 5px solid #3e6ccf;
      color:  #FFFFFF;
      font-size: 2 em;
      line-height: 1.4em;
      font-style: strong;
      text-align: center;
      /* margin-right: -120px; */
      border-radius: 1px;
      background-color: #3e6ccf;
    }

    #project {
      float: left;
    }

    #project span {
      color:  #3e6ccf;
      text-align: right;
      width: 52px;
      margin-right: 10px;
      display: inline-block;
      font-size: 0.8em;
    } 

     #company {
      float: right;
      text-align: right;
    }

    #project div,
    #company div {
      white-space: nowrap;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    } 

     table tr:nth-child(2n-1) td {
      background: #F5F5F5;
    }

    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: #3e6ccf;
      border-bottom: 1px solid #C1CED9;
      white-space: nowrap;
      font-weight: normal;
    }

    table .service,
    table .desc {
      text-align: left;
    }

    table td {
      padding: 20px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
    }

    table td.grand {
      border-top: 1px solid #3e6ccf;
     
    }

   
    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }
  </style>

  
<div id="page_pdf">
    <table id="factura_head">
      <tr>
    
        <h1>REPORTE DE VISITANTES</h1>

      </tr>
    </table>



    <table  id="factura_detalle">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <!-- <th scope="col">Tipo Usuario</th>
      <th scope="col">Documento</th> -->
      <th scope="col" class="textleft">Nombre</th>
      <th scope="col" class="textleft">Apellido</th>
  
     
      <th scope="col" class="textleft">Celular</th>
      <th scope="col" class="textleft">Fecha Ingreso</th>
    </tr>
  </thead>
  <tbody>
      @foreach($visita as $Visitante)
    <tr>
      <th scope="row">{{$Visitante->ID_VISITANTE }}</th>
      <td>{{$Visitante->NOMBRE}}</td>
      <td>{{$Visitante->APELLIDO}}</td>
      <td>{{$Visitante->CELULAR1}}</td>
      <td>{{$Visitante->created_at}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
    </div>
    
</body>
</html>