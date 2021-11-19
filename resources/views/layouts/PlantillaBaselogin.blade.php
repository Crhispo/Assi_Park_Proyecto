<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')
    <!-- Bootstrap CSS -->
    <title>ASSIPARK</title>
  </head>
  <body>
  @include('sweet::alert')
    <h1 class="bg-primary text-white text-center"></h1>

    <div class="container">
        @yield('contenido')
    </div>

    @yield('js')
  </body>
</html>
