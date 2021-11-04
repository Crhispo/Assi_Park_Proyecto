<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            width: 24px;
            height: 24px;
        }

        #navbarDropdown {
            text-align: right;
        }

    </style>
    @yield('css')
    <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

    <title>@yield('title','vehiculo')</title>
</head>

<body>
    <!---------SIDEBAR---------->


    <div class="d-flex">
        <div id="sidebar-container" style="Background-color:#f5f6f8;">
            <div class="logo text-dark">

            </div>

        <!-----------NAVBAR------------>



            <div class="container">
                @yield('Encabezado','Vehiculo')
                @yield('content')
            </div>
            @yield('js')
            <!-- start: right menu -->
        @include('menus.menu_derecha')
        <!-- end: right menu -->


        <!-- start: Javascript -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/jquery.ui.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>



        <!-- plugins -->

        <script src="asset/js/plugins/moment.min.js"></script>
        <script src="asset/js/plugins/jquery.datatables.min.js"></script>
        <script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
        <script src="asset/js/plugins/jquery.nicescroll.js"></script>


        <!-- custom -->
        <script src="asset/js/main.js"></script>
        
        <!-- end: javascript -->

</body>

</html>
