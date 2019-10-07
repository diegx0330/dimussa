<?php 

$server="localhost";
$user="root";
$basedatos="login";
$pass="";
$msj="No se ha encontrado enlace con el servidor o la base de datos";


$conexion= new mysqli($server,$user,$pass,$basedatos) or die ($msj);
$acento= $conexion->query("SET NAMES 'utf8'");

if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
}

 ?>