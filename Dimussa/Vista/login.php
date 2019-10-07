    <?php 
include('header.php') ?>
<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
    $records->bindParam('email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = 'Bienvenido a Dimussa disfruta de nuestra plataforma';


    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: pagina');
      
    } else {
      $message = 'Lo sentimos sus datos son incorrectos';
    }
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>

      <?php if(!empty($user)): ?>
      <br>  <?= $user['email']; ?>
               <button><a href="logout.php">Cerrar sesión</button>
    <?php else: ?>
    <?php endif; ?>
    <title>Iniciar Sesión</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
      <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../vista/publico/css/log.css">
</head>

<body class="logueo" style="background-image: url(../vista/publico/media/img/cover4.jpg);">
        <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1 class="h1-log">Iniciar sesion</h1>
    <div class=" w3l-login-form">
        <img src="http://www.catlife.co/wp-content/uploads/2016/04/logo-login-1.png" width="50px" height="50" style="margin-left: 45%;">
        <form action="login.php" method="POST">

            <div class=" w3l-form-group">
                <label>Usuario:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="email" name="email" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="#">Olvidaste tu contraseña?</a>
                <p><input type="checkbox">Recuérdame</p>
            </div>
            <button type="submit" name="submit" value="submit">Iniciar</button>
        </form>
        <p class=" w3l-register-p">¿No tienes una cuenta?<a href="registrar.php" class="register">Registrar</a></p>
    </div>
    <br>
        
      </a>


<?php 
include('footer.php') ?>

</body>

</html>