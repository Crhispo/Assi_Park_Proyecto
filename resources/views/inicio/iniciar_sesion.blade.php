<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="Style_Iniciar_SS.css" />
    <title>Iniciar Sesión</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin">
          <form action="#" class="sign-in-form">
            <h2 class="title">Iniciar Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="number" placeholder="Cédula" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" required/>
            </div>
            <p class="Forget_Pss"><a href="Recuperar_Contrasena.html"> ¿Olvidaste tu Contraseña? </a></p>
            <a href="http://localhost/Proyecto/Vistas/Modulo_Usuarios/Dashboard_admin.php"  >
            <input type="button" value="Entrar" class="btn solid" >
            </a>
            
            
        
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          
          <img src="img_Incio_Sesion\log.svg" class="image" alt="" />
        </div>
        
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
