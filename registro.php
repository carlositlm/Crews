<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Login</title>

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" >
    <link rel="stylesheet" href="css/custom.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">

           function registrar(){
                 var opcion = "registrar";
                 var usuario = $("#form-account").val();
                 var contrasena = $("#form-password").val();
                 var correo = $("#form-email").val();
                 
            
            var parametros = {
                "opcion"   : opcion,
                "usuario" : usuario,
                "contrasena": contrasena,
                "correo" : correo
            
        };
         $.ajax({data:  parametros,url: 'controller/usuario_controller.php',type:  'post',
                beforeSend: function () {$("#resultado").html("Procesando, espere por favor...");},
                success:  function (response) {
                    //alert(response);

                    if (response=="bien") {
                         
                    }
                    else if(response=="existe"){
                      document.getElementById('titulo_modal').innerHTML = "Este usuario ya existe";
                      $('#notificacion').modal('show')
                    }
                    
                    else{
                      document.getElementById('titulo_modal').innerHTML = "error en el servidor"
                      $('#notificacion').modal('show')
                    }
                }});



         }

    </script>

  </head>

  <body>

    <!-- Modal -->
<div class="modal fade" id="notificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="titulo_modal" style="color:black">Registro exitoso</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    </div>
  </div>
</div>



    <div class="container">

      <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                <span class="sr-only">Menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="index.php" class="navbar-brand">CrewsOTServer</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="registro.php">Registro</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="#">Donaciones</a></li>
                <li><a href="#">Descargas</a></li>
              </ul>
              <!-- <form action="" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Buscar">
                </div>
              </form>-->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.google.com">Salir de aquí</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

    </div>





    <div class="my-content" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-12" >
                  <h1><strong>CrewsOTServer</strong> Regístrate</h1>
                  <div class="mydescription">
                    <p>Únete a la mejor experiencia.</p>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                    <div class="myform-top">
                        <div class="myform-top-left">
                          <h3>Sitio oficial</h3>
                            <p>Por favor, ingresa tus datos:</p>
                        </div>
                        <div class="myform-top-right">
                          <img src="./img/icono.jpg" alt="..." class="img-thumbnail">
                        </div>
                    </div>
                    <div class="myform-bottom">
                      <form role="form" action="" method="post" class="">
                        <div class="form-group">
                            <input type="text" name="form-account" placeholder="Usuario..." class="form-control" id="form-account">
                        </div>
                        <div class="form-group">
                            <input type="text" name="form-password" placeholder="Contraseña..." class="form-control" id="form-password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="form-email" placeholder="Email..." class="form-control" id="form-email">
                        </div>
                        <!-- <button type="submit" class="mybtn">Registrarme</button>

                        <button type="submit" class="mybtn">Iniciar Sesión</button> -->
                <a href="#" class="btn btn-default mybtn" onclick="registrar()">Registrarme</a>
                ó
                <a href="login.php" class="btn btn-default mybtn" >Iniciar Sesion</a>

                      </form>
                    </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mysocial-login">
                    <h3>...Visita nuestras redes sociales:</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-google-plus"></i> Google Plus
                      </a>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <!-- Enlazamos el js de Bootstrap, y otros plugins que usemos siempre al final antes de cerrar el body -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-lastest.js"></script>

    </script>

  </body>
</html>
