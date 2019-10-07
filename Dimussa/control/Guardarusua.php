<?php 
include ('database.php');
   if(isset($_POST['BtnGuardar'])) {

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


	$ins= "INSERT INTO  usuario ( idUsuario, IdTipoDoc, idTipoUsuario, NombreUsuario, ApellidoUsuario,  GeneroUsua, FechaNacUsua, ClaveUsua, DireccionUsua, CelUsua, CorreoUsua) VALUES ('$usuario', '$TipoDoc', '$Tipousua', '$Nombre', '$Apellidos','$Genero', '$Fecha', '$clave','$Direccion', '$Cel', '$correo')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
					location.href='../Vista/App/Admin.php';
					</script>";
			}else{
				echo "NO NADA";
			}
  }

  mysqli_close($conexion);
 ?>