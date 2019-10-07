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
  	<link rel="stylesheet" type="text/css" href="../vista/publico/css/estilo.css">
 	  <link rel="icon" type="text/css" href="../vista/publico/media/img/logo.png">
	     <title>Dimussa</title>
</head>
      <nav class="navbar navbar-expand-lg navbar-light ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
              </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <div class="container">
              <a href="../vista/index.php"><h1 class="letra">Dimussa..<span>&#160;</span></h1></a>
            </div>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                  <li class="nav-item active">
                    <a class="nav-link" href="../vista/index.php"style="color: white;">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../vista/juego.php" style="color: white;">Juego</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../vista/Nosotros.php" style="color: white;">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../vista/Contacto.php" style="color: white;">Contacto</a>
                  </li>
                  <button style="background-color: #33FFE6; border-bottom: 30px; border-radius: 12px; color: white;">
                 <?php 
                    if (empty($_SESSION['user'])) {
                       echo '<a class="nav-link lead" href="#modal1" data-toggle="modal">Iniciar sesión</a>';
                                
                     }  else{
                                
                              echo '   
                                                        
                                  <li class="nav-item dropdown ">
                                  <a class="nav-link dropdown-toggle lead" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['usuario'].'</a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item " href="#">Cambiar Contraseña</a>
                                    <a class="dropdown-item" href="../Control/logout.php">Cerrar Sesión</a>
                                    
                                  </div>
                                </li> ';
                          }
               ?>
               </button>
              </li>
           </ul>
          </div>
        </nav> 
       

       
         <div class="modal" id="modal1" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-modal">Ingresar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <div class="modal-body" style="background-image: url(../vista/publico/media/img/cover4.jpg);">
                <center><img src="../vista/publico/media/img/logo.png" width="250" class="img-fluid"></center> 
               <!-- Creamos formlario para ingresar informaciòn -->
                <form  method="post" action="../Control/logueo.php">
                    <div class="form-group">
                       
                    </div>
                    <div class="form-group">
                      <label for="text">Usuario</label>
                      <input type="text" class="form-control" required    name="usua" placeholder="Ingrese su Usuario">
                    </div>
                    <div class="form-group">
                      <label for="clave">Contraseña</label>
                      <input type="password" name="clave"  required class="form-control"   placeholder="Ingrese su Contraseña">
                    </div>
                    <center><button type="submit" class="btn btn-primary"  name="login" >Ingresar</button></center>
                  </form>
                  <br><hr>
                  <p>¿Todavía no tienes cuenta?,  <a class="card-title" href="../vista/Registrar.php">Registrate<a></p>
              </div>
            </div>
          </div>
      </div>
                </ul>
        </div>
      </nav>

      <div>
      <a href="juego.php">
        <img class="img" src="../vista/publico/media/img/1.png" width="100" title="Juegas">
      </a>
      </div>
