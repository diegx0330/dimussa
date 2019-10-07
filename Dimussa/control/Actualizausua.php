<?php 
include ('database.php');

	$usuario = $_POST['idusuario'];
	$TipoDoc = $_POST['TipoDoc'];
	$Tipousua = $_POST['TipoUsua'];
	$Nombre = $_POST['NombUsua'];
	$Apellidos = $_POST['ApellUsua'];
	$Genero= $_POST['GeneUsu'];
	$Fecha = $_POST['FechaNac'];
	$clave = $_POST['PassUsua'];
	$Direccion = $_POST['DirUsua'];
	$Cel = $_POST['CeluUsua'];
	$correo = $_POST['CorreoUsua'];

$eje = $conexion -> query("UPDATE usuario SET IdTipoDoc='$TipoDoc', idTipoUsuario='$TipoDoc', NombreUsuario='$Nombre', ApellidoUsuario='$Apellidos', GeneroUsua='$Genero' , FechaNacUsua='$Fecha',ClaveUsua='$clave', DireccionUsua='$Direccion',CelUsua='$Cel', CorreoUsua='$correo' WHERE idUsuario='$usuario'");



if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admin.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admin.php';
	</script>";
}


 ?>