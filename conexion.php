<?php

$conn = new mysqli("localhost", "root", "", "proyecto");
if ($conn->connect_errno) {
    echo "Error en la conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
//echo $conn->host_info . "\n";


?>