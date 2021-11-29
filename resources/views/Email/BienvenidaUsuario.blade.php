
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>

    <style>
        .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 5px; 
}

.container {
  padding: 2px 16px;
}


    </style>

    <div class="card">
<h2> ¡Hola {{$nombre}}, Bienvenido a ASSIPARK! </h2>
<BR>
    <div class="container">
<P>Te informamos que ya has sido registrado exitosamente en el Sistema , tus credenciales de Inicio de Sesión son:</P>
<P>✓ Usuario :{{$NUMERO_IDENTIFICACION}}</P>
<P>✓ Contraseña :{{$password}}</P> 
<BR>
    <BR>  
<p>En caso de que desees cambiar tu contraseña, por favor hacer</p><a href="{{route('CambioContrasena')}}">Clic aqui</a>
</div>
    </div>
</body>
</html>
