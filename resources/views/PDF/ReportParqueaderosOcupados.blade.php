<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Reporte de Parqueaderos Ocupados</title>
</head>

<body>
  <style>
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }


    body {
      position: relative;
      width: 21cm;
      height: 29.7cm;
      margin: 0 auto;
      margin-left: 55px;
      color:  #5D6975;
      background: #FFFFFF;
      font-family: "Poppins", sans-serif;
      font-size: 12px;
      
    }

    header {
      padding: 10px 0;
      margin-bottom: 30px;
    }

    #logo {
      text-align: center;
      margin-bottom: 10px;
    }

    #logo img {
      width: 90px;
    }

    h1 {
      width: 970px;
      border-top: 5px solid #3e6ccf;
      border-bottom: 5px solid #3e6ccf;
      color:  #FFFFFF;
      font-size: 2 em;
      line-height: 1.4em;
      font-style: strong;
      text-align: center;
      margin-right: -120px;
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
      ;
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

  <!-- <img class="anulada" src="public\Img\LOGO_FINAL_ASSIPARK.png" alt="Anulada"> -->
  <div id="page_pdf">
    <table id="factura_head">
      <tr>
        <!-- <div id="logo">
      <img src="img\LOGO_FINAL_ASSIPARK.jpg">
    
    </div> -->
        <h1>REPORTE PARQUEADEROS OCUPADOS POR RESIDENTES</h1>

      </tr>
    </table>


    <table id="factura_detalle">
      <thead>
        <tr>
          <th scope="col">ID Parqueadero</th>
          <th scope="col" class="textleft">Tipo de Parqueadero</th>
          <th scope="col" class="textleft">Marca</th>
          <th scope="col" class="textleft">Placa</th>
          <th scope="col" class="textleft">N° Identificación Prop.</th>
          <th scope="col" class="textleft">Nombre Prop.</th>
          <th scope="col" class="textleft">Apellido Prop.</th>
          <th scope="col" class="textleft">Apartamento</th>

        </tr>
      </thead>
      <tbody>
        @foreach($parqdero as $parqueaderos)
        <tr>
          <th scope="row">{{$parqueaderos->id}}</th>
          <td>{{$parqueaderos->TIPO_PARQUEADERO_VEHICULO}}</td>
          <td>{{$parqueaderos->MARCA}}</td>
          <td>{{$parqueaderos->placa}}</td>
          <td>{{$parqueaderos->NUMERO_IDENTIFICACION}}</td>
          <td>{{$parqueaderos->NOMBRE}}</td>
          <td>{{$parqueaderos->APELLIDO}}</td>
          <td>{{$parqueaderos->apartamento}}</td>
        </tr>
        @endforeach

      </tbody>
    </table>



  </div>


  <div id="page_pdf">
    <table>

      <tr>
        <!-- <div id="logo">
      <img src="img\LOGO_FINAL_ASSIPARK.jpg">
    
    </div> -->
        <h1>REPORTE PARQUEADEROS OCUPADOS POR VISITANTES</h1>

      </tr>
    </table>
     <table id="factura_detalle">
    <thead>
      <tr>
        <th scope="col">ID Parqueadero</th>
        <th scope="col" class="textleft">Tipo de Parqueadero</th>
        <th scope="col" class="textleft">Marca</th>
        <th scope="col" class="textleft">Placa</th>
        <th scope="col" class="textleft">N° Identificación Prop.</th>
        <th scope="col" class="textleft">Nombre Prop.</th>
        <th scope="col" class="textleft">Apellido Prop.</th>
        <th scope="col" class="textleft">Apartamento<br> Visitado</th>

      </tr>
    </thead>
    <tbody>
      @foreach($parqdero2 as $parqueaderos)
      <tr>
        <th scope="row">{{$parqueaderos->id}}</th>
        <td>{{$parqueaderos->TIPO_PARQUEADERO_VEHICULO}}</td>
        <td>{{$parqueaderos->MARCA}}</td>
        <td>{{$parqueaderos->placa}}</td>
        <td>{{$parqueaderos->NUMERO_DOCUMENTO}}</td>
        <td>{{$parqueaderos->NOMBRE}}</td>
        <td>{{$parqueaderos->APELLIDO}}</td>
        <td>{{$parqueaderos->apartamento}}</td>

      </tr>
      @endforeach

    </tbody>
    </table>



  </div>

</body>

</html>
