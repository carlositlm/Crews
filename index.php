<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio CrewsOTServer</title>

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" >
    <link rel="stylesheet" href="css/custom.css"> <!-- Css mio -->
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
  </head>
  <body>


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
                <a href="index.html" class="navbar-brand">CrewsOTServer</a>
              </div>
              <?php session_start();
              if(isset($_SESSION['estatus'])){
                $login =$_SESSION['estatus'];  
              } 
              else{
                $login = "n";
              }
              
              ?>
              <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav">
                  <?php if($login=="login") {
                  echo "<!--";
                 } ?>
                  <li><a href="registro.php">Registro</a></li>
                   <li><a href="login.php">Iniciar Sesion</a></li>

                  <?php if($login=="login") {
                  echo "-->";
                 } ?>
                  <li><a href="registro.php">Donaciones</a></li>
                  <li><a href="#">Descargas</a></li>
                </ul>
                <!-- <form action="" class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                  </div>
                </form>-->
                <ul class="nav navbar-nav navbar-right">
              <?php 
                  if(isset($_SESSION['usuario'])){
                    if($login=="login") {
                     echo '<li><a href="#">'.$_SESSION['usuario'].'</a></li>';  
                    }
                    
                  } 
             
              
              ?>
                  <li><a href="https://www.google.com">Salir de aquí</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
      </div>





    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
