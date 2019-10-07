<?php 
# Desactivamos la sesion:
unset($_SESSION['usuario']);
# Aseguramos desactivar todas las sesiones:
session_unset();
# Destruimos todos los archivos y variables de la sesion:
session_destroy();
# Destruimos los cookies del navegador para que al dar atrás no 
$parametros_cookies = session_get_cookie_params(); 
setcookie(session_name(),0,1,$parametros_cookies["path"]);
# Actualizamos la pagina donde nos escontrabamos y redirigimos a la pagina princial
echo "<meta http-equiv='refresh' content='0;'/>";
header('location:../Vista/index.php');
    # Mostramos un mensaje con el cierre de sesion:
  
    header("location:../Vista/index.php?mensaje=$msj");
exit;
 ?>