
<?php 
include ('database.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['GuardaTipoDoc'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$idTipoDoc = $_POST['idTipoDoc'];
	$NombreTipoDoc = $_POST['NombreTipoDoc'];
	
	
	$ins= "INSERT INTO tipodocumento (idTipoDoc, DescripTipoDoc) VALUES ('$idTipoDoc', '$NombreTipoDoc')";
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
					location.href='../Vista/App/admin/Config.php#v-pills-TipoDoc';
					</script>";
			}else{
				echo "NO NADA";
			}
  }

  mysqli_close($conexion);
 ?>