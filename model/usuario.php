<?php

 class usuario{

 		public $usuario;
		public $contrasena;
		public $correo;


		function __construct($usu, $contra, $corre){
			$this->usuario = $usu;
			$this->contrasena = $contra;
			$this->correo = $corre;
		}

		function registrar(){
			include("../conexion.php");

			$sql = "SELECT * FROM `accounts` where name='$this->usuario'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo "existe";}} 
			else {
    				$sql = "INSERT INTO `accounts`(`name`, `password`, `email`)
					VALUES ('$this->usuario', '$this->contrasena', '$this->correo')";

					if ($conn->query($sql) === TRUE) {
				    echo "bien";
					} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
					}

			}

			
		}

		function login(){
			include("../conexion.php");

			$sql = "SELECT * FROM `accounts` where name='$this->usuario'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {

				$sql = "SELECT * FROM `accounts` where name='$this->usuario' and password='$this->contrasena'";
				$result2 = $conn->query($sql);

			if ($result2->num_rows > 0) {while($row = $result2->fetch_assoc()) {

				//echo $row["name"];
				$_SESSION['usuario']=$row["name"];
				$_SESSION['estatus']="login";

				echo "bien";
			}
			} 
			else {echo "error2";} //contraseña incorrecta

			}
			} 
			else {echo "error1";} //la cuenta no existe
		}

 }
	
?>