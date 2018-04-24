<?php
	session_start();
	include("../model/usuario.php");
	


	if (isset($_POST['usuario'])) {
	  $usuario=$_POST['usuario'];	
	}

	if (isset($_POST['contrasena'])) {
	  $contrasena=$_POST['contrasena'];	
	}

	if (isset($_POST['correo'])) {
	  $correo=$_POST['correo'];	
	}

	if (isset($_POST['opcion'])) {
	  $Op=$_POST['opcion'];	
	}
	else{
	  $Op="";
	}


switch ($Op) {
		case 'login':
			$usuario = new usuario($usuario , $contrasena ,"");
        	$usuario -> login();	 
            
		break;

		
		case 'registrar':

			$usuario = new usuario($usuario , $contrasena ,$correo );
       		$usuario -> registrar();	 
            
		break;

		case 'eliminar':
		
			$usuario = new usuario($usuario , "" ,"");
        	$usuario -> buscar_registro();	 
            
       	break;

       	case 'modificar':
		
			$usuario = new usuario($usuario , "" ,"");
        	$usuario -> buscar_registro();	 
            
       	break;


		default:
			# code...
		break;
	}



?>