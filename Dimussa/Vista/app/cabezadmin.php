<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viemport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../vista/publico/css/estilo.css">
    <link rel="icon" type="text/css" href="../../vista/publico/media/img/logo.png">
       <title>Dimussa</title>
</head>
<body class="body">

      <nav class="navbar navbar-expand-lg navbar-light ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
              </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <div class="container">
              <a href="../index.php"><h1 class="letra">Dimussa..<span>&#160;</span></h1></a>
            </div>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                  <li class="nav-item active">
                    <a class="nav-link" href="../app/admin.php"style="color: white;">Usuarios <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="pruebas.php" style="color: white;">Pruebas</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="pruebas.php" style="color: white;">Configuración</a>
                  </li>


              <li class="nav-item"> 
                 <?php 
                    if (empty($_SESSION['user'])) {
                       echo '<a class="nav-link lead" href="#modal1" data-toggle="modal">Ingreso</a>';
                                
                     }  else{
                   
              
                              echo '   
                                                         
                                  <li class="nav-item dropdown ">
                                  <a class="nav-link dropdown-toggle lead" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['usuario'].'</a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item " href="../index.php"><span class="oi oi-cog" style="font-size:20px;color:#b60a85"></span> Inicio</a>
                                    <a class="dropdown-item" href="../../Control/logout.php"><span class="oi oi-arrow-circle-left" style="font-size:20px;color:#b60a85"></span> Cerrar Sesión</a>
                                    
                                  </div>
                                </li> ';
                          }
               ?>
               
              </li>


             
             </ul>
          </div>
        </nav> 
   
 </header>