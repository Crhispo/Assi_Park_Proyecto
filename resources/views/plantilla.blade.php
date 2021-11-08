<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('css')
    <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css" />
  <link href="asset/css/style.css" rel="stylesheet">
<!-- end: Css -->

    <title>@yield('title','vehiculo')</title>
</head>

<body id="mimin" class="dashboard">
    <!---------SIDEBAR---------->

        <!-----------NAVBAR------------>
                @yield('Encabezado','Vehiculo')
                @yield('content')

            @yield('js')
            <!-- start: right menu -->

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
