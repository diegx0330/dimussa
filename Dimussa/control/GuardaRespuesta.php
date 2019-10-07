<?php 
include ('database.php');
 
   if(isset($_POST['BtnGuardar'])) {

	$respuest = $_POST['respuesta'];
	$presCorre = $_POST['preCorres'];
	$Idrespuest = $_POST['Idrespuesta'];
	
	$ins= "INSERT INTO  respuesta ( idRespuesta, idPregunta, DescrPreg) VALUES ('$respuest', '$presCorre', '$Idrespuest')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
			echo "<script>
	alert('La tabla respuestas ha sido guardada');
	location.href='../Vista/App/Admin.php';
	</script>";			}else{
				echo "NO NADA";
			}
  }

  mysqli_close($conexion);
 ?>