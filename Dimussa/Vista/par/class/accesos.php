<?php require 'conexion.php';
class accesos extends conexion {
	function __construct() {
		parent::__construct();

		return $this;
	}

	public function create_pass($pass) {
		return password_hash($pass, PASSWORD_DEFAULT);
	}

	public function login() {
		$data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();

		$sql = "SELECT usuarios.correo, usuarios.pass FROM usuarios WHERE correo = ?;";
		$consulta = $this->prepare($sql);

		$consulta->bind_param('s', $correo);
		$correo = $data['correo'];
		$pass = $data['pass'];
		$this->execute($consulta);
		$consulta->bind_result($correo, $pass_db);
		$consulta->fetch();

		if(password_verify($pass, $pass_db)) {
			$info = array(
				'estado' => true,
				'correo' => $correo,
				'pass' => $pass
			);
		} else {
			$info = array(
				'estado' => false,
				'mensaje' => 'El usuario o contraseña es incorrecto'
			);
		}

		return json_encode($info);
	}
}
$accesos = new accesos;
?>