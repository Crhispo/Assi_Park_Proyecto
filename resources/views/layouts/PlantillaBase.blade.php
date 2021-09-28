<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{asset('css/Style_Iniciar_SS.css')}}" />
    @yield('css')

    <!-- Bootstrap CSS -->

    <title>ASSIPARK</title>
  </head>
  <body>
    <h1 class="bg-primary text-white text-center"></h1>

    <div class="container">
        @yield('contenido')
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    @yield('js')
  </body>
</html>