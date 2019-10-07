<?php 
include ('database.php');
 
   if(isset($_POST['BtnGuardar'])) {

	$Numprueba = $_POST['NumbPregunta'];
	$NomPre = $_POST['Pregun'];
	$Idprueb = $_POST['Idprueba'];
	
	$ins= "INSERT INTO  preguntas ( idPregunta, DescrPregunta, idPrueba) VALUES ('$Numprueba', '$NomPre', '$Idprueb')";
	
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