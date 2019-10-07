
<?php 
include ('database.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['GuardaTipous'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$idTipous = $_POST['idTipous'];
	$NombreTipous = $_POST['NombreTipous'];
	
	
	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO tipousuario (idTipoUsuario, DescripTipoUsua) VALUES ('$idTipous', '$NombreTipous')";
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
					location.href='../Vista/App/admin/Config.php';
					</script>";
			}else{
				echo "NO NADA";
			}
  }

  mysqli_close($conexion);
 ?>