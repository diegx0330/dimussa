<?php 
include ('database.php');
 
   if(isset($_POST['BtnGuardar'])) {

	$Numprueba = $_POST['NumPrueba'];
	$NomPrueba = $_POST['NombPrueba'];
	$DesPrueba = $_POST['Descrprueba'];
	
	$ins= "INSERT INTO  prueba ( idPrueba, NombPrueba, DescrPrueba) VALUES ('$Numprueba', '$NomPrueba', '$DesPrueba')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
			echo "<script>
	alert('La prueba se ha guardado');
	location.href='../Vista/App/Admin.php';
	</script>";

			}else{
				echo "NO NADA";
			}
  }

  mysqli_close($conexion);
 ?>