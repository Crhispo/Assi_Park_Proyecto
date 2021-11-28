<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>


<h2>Hola {{$nombre}}, Bienvenido a ASSIPARK</h2>
<P>Tu usuario es : {{$NUMERO_IDENTIFICACION}} y tu contraseña es : {{$password}}</P>
    
<p>Si deseas cambiar tu contraseña : </p>
<a href="{{route('CambioContrasena')}}">Clic aqui</a>


</body>
</html>