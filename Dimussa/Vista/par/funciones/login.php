<?php
include('../class/accesos.php');
if(isset($_POST['submit'])) {
	$correo = $_POST['email'];
	$pass = $_POST['password'];
	$params = array(
		'email'=>$correo, 
		'password'=>$pass
	);

	$login = json_decode($accesos->login($params));

	if ($login->estado == true) {
		echo 'Se inicio sesion correctamente.';
		print_r($login);
	} else {
		echo '<p>Ocurrio un error.</p>';
		echo $login->mensaje;
	}
}
?>