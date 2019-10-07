<?php include( 'Cabezadmin.php'); 
 include( '../../Control/database.php'); 
header( 'Content-Type: text/html; charset=UTF-8'); 
error_reporting(0); 

$id = $_GET['id'];


$sql="select usuario.idUsuario, tipodocumento.DescripTipoDoc, tipousuario.DescripTipoUsua, usuario.NombreUsuario, usuario.ApellidoUsuario, usuario.GeneroUsua, usuario.FechaNacUsua, usuario.ClaveUsua, usuario.DireccionUsua, usuario.CelUsua, usuario.CorreoUsua from usuario
INNER JOIN tipodocumento ON     usuario.IdTipoDoc = tipodocumento.idTipoDoc
INNER JOIN tipousuario ON usuario.idTipoUsuario = tipousuario.idTipoUsuario WHERE usuario.idUsuario = $id";

$eje = $conexion->query($sql);
  while ($row = $eje -> fetch_row()) {

?> 



    <!-- Si la consulta trae datos nos muestra el formulario con los datos-->
<section class="container">
  <div class="card mt-4">
    <div class="row mt-4">
      <div class="col-md-3">
        <center><img src="../Publico/Media/img/cover4.jpg" class="card1" width="200" height="200"> <br><br>
            <h5 class="card-title">Modificar Usuarios</h5> </center>     
      </div>

      
        <div class="col-md-7">
           <Form  method="POST">
            <!-- Ocultamos con Hidden el id del usuario ya que este no se puede modificar -->
                <div class="form-group">
                  
                       <input type="hidden" class="form-control" name="idusuario" value="<?php echo $row[0] ?>">     
                     
                </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Tipo Documento</label>
                  <select class="form-control" name="TipoDoc">
                       
                      <?php  
                        include( '../../Control/database.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * from tipodocumento";
                          $eje1 = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje1->fetch_row()){
                            echo '<option  value="'.$row1[0].' " >'.$row1[1].'</option>';
                          }

                        ?>
                  </select>
                </div>

                
            
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Tipo de Usuario</label>
                  <select class="form-control" name="TipoUsua" >
                    
                    <?php  
                                                       
                          include( '../../Control/database.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * from tipousuario";
                          $eje2 = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($fila2 = $eje2->fetch_row()){
                            echo '<option value="'.$fila2[0].'">'.$fila2[1].'</option>';
                          }
                        ?>
                  </select>
                </div>
            </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Nombres</label>
                  <input type="text" name="NombUsua" class="form-control" value="<?php echo ''.$row[3].'' ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Apellidos</label>
                  <input type="text" name="ApellUsua" class="form-control" value="<?php echo ''.$row[4].'' ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Género</label>
                  <select class="form-control" type="text" name="GeneUsu" value="<?php echo ''.$row[5].'' ?>">
                          <option>F</option>
                          <option>M</option>
                  </select>
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Fecha Nacimiento</label>
                  <input type="date" name="FechaNac" class="form-control" value="<?php echo ''.$row[6].'' ?>">
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Contraseña</label>
                  <input type="password" name="PassUsua" class="form-control" value="<?php echo ''.$row[7].'' ?>">
                </div>
             </div>
             <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleFormControlInput1">Dirección</label>
                  <input type="text" name="DirUsua" class="form-control" value="<?php echo ''.$row[8].'' ?>">
                </div>                 
             </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Celular</label>
                  <input type="text" name="CeluUsua" class="form-control" value="<?php echo ''.$row[9].'' ?>">
                </div>
                 <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">E-mail</label>
                  <input type="mail" name="CorreoUsua" class="form-control" value="<?php echo ''.$row[10].'' ?>">
                </div>
             </div>
          
              <div class="col-md-12 justify-content-center mt-5">
                  <center><button type="submit" class="btn btn-primary"  name="BtnModifica"  formaction="../../Control/Actualizausua.php">Modificar</button></center> <br>
             </div> 

       </form>
        </div>
    </div> 
    </div>
    <br><hr> 
  
 </section>
</body>
<?php include('pieadmin.php') ?>
</html>
   <?php }


