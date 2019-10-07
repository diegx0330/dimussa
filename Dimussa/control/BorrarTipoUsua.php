<?php
include ('database.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

	
			

			$del = $conexion -> query("DELETE FROM tipousuario WHERE idTipoUsuario = '$id' ");
				if ($del) {
					echo "<script>
					
					alert('Tipon de Usuario borrado correctamente');
						location.href='../Vista/App/admin/Config.php';
					</script>";
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../Vista/App/admin/Config.php';
					</script>";

				}


		
 ?>