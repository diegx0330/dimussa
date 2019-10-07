<?php
# Metodo para el tratamiento de notificaciones:
error_reporting(0);
# Objeto conexion a la base de datos:
include('database.php');

# Validacion de obturacion del boton:
if (isset($_POST['registro'])) {
	
	# Captura de variables:
	$tipodoc = $_POST['TipoDoc'];
	$id =$_POST['idusuario'];
	$nombres = $_POST['Nombres'];
	$apellidos = $_POST['Apellidos'];
	$genero = $_POST['GeneUsu'];
	$contrasena = $_POST['PassUsua'];
	$direccion = $_POST['DirUsua'];
	$celular = $_POST['CeluUsua'];
	$email = $_POST['CorreoUsua'];
	


	# Definimos las constantes del procedimiento:
	if (empty($tipo)) {
		# Para el caso del tipo de usuario, si no lo enviamos, Definiremos nuestro tipo de usuario:
		$tipo= 2; //En este caso el tipo del usuario es 2,porque es el que se ha definido como cliente
	}else{
		$tipo = $_POST['tipousua'];
	}
	
	
	$sql ="Inser into usuario values ('$id', '$tipo','$nombres', '$Apellidos', '$email', '$password', '$opcion')";
	$eje = $con->query($sql);
	
	if ($row = $eje->fetch_row()) {
		echo $row[0];	
	}else{
		$msj = 'Ha ocurrido un error al guardar el usuario';
		echo $msj;
	}
}
?>
