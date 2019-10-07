<?php include( 'cabezadmin.php'); 
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 
?>

<section >
 <div class="container">
  <div class="card mt-4">
    <div class="row mt-4">
      <div class="col-md-3">
        <center><img src="../Publico/media/img/cover4.jpg" class="card1" width="200" height="200"> <br><br>
            <h5 class="card-title" style="color: black">Usuarios</h5> </center>     
      </div>
        <div class="col-md-7">
          <!-- Si el usuario presiona el botòn agregar al final del formulario, lo llevarà a control a el archivo Guardarusua Cada input debe tener su name= " "-->
          <Form  method="POST"  action="../../control/Guardarusua.php">
             <div class="row">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect1" style="color: black;">Tipo Documento</label>
                  <select class="form-control" name="TipoDoc" required>
                        <!-- Realizamos  una consulta a la tabla Tipo Documento para que me llene el Select-->
                      <?php  
                        include( '../../Control/database.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * from tipodocumento";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }
                        ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1" style="color: black">Documento</label>
                    <div class="input-group">
                       <input type="number" class="form-control" name="idusuario" class="form-control" placeholder="Número de Identificación" required>     
                     </div> 
                </div>
            
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect1">Tipo de Usuario</label>
                  <select class="form-control" name="TipoUsua">
                    <?php  
                        include( '../../Control/database.php'); 

                          $sql = "SELECT * from tipousuario";
                          $eje1 = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($fila = $eje1->fetch_row()){
                            echo '<option value="'.$fila[0].'">'.$fila[1].'</option>';
                          }
                        ?>
                  </select>
                </div>
            </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1" style="color: black">Nombres</label>
                  <input type="text" name="NombUsua" class="form-control" placeholder="Nombres" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1" style="color: black">Apellidos</label>
                  <input type="text" name="ApellUsua" class="form-control" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Género</label>
                  <select class="form-control" type="text" name="GeneUsu" required>
                          <option>F</option>
                          <option>M</option>
                  </select>
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Fecha Nacimiento</label>
                  <input type="date" name="FechaNac" class="form-control" placeholder="dd/mm/aaaa" required>
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Contraseña</label>
                  <input type="password" name="PassUsua" class="form-control" placeholder="Contraseña" required>
                </div>
             </div>
             <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleFormControlInput1">Dirección</label>
                  <input type="text" name="DirUsua" class="form-control" placeholder="Dirección" required>
                </div>                 
             </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Celular</label>
                  <input type="number" name="CeluUsua" class="form-control" placeholder="Celular" required>
                </div>
                 <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">E-mail</label>
                  <input type="email" name="CorreoUsua" class="form-control" placeholder="Correo Electrónico" required>
                </div>
             </div>
             <br> <hr>
              <div class="col-md-12 justify-content-center">
                  <center><button type="submit" class="btn btn-primary"  name="BtnGuardar" >Guardar</button> 
                  <button type="reset" class="btn btn-primary"  name="BtnLimpiar" >Limpiar</button></center> <br>
             </div> 
       </form>
        </div>
    </div> 
    </div>
    <br><hr>
</div>
 <div class="container-fluid" style="margin-left: 5%;">
  <div class="row">
  <div class="col-md-10 mx-5 ">
    <table  class="table mt-3 " border="1">
      <thead class="thead-dark">
          <th><center>Tipo Doc.</center></th>
          <th><center>Documento</center></th>
          <th><center>Tipo usuario</center></th>
          <th><center>Nombres</center></th>
          <th><center>Apellidos</center></th>
          <th style="width: 4rem"><center>Género</center></th>
          <th style="width: 6rem"><center>Fecha Nac.</center> </th>
        
          <th><center>Dirección</center></th>
          <th style="width: 6rem"><center>Celular</center></th>
          <th><center>E-mail</center></th>
          <th><center>Editar </center></th>
          <th style="width: 6rem"><center>Eliminar</center> </th>
       
      </thead>
    <?php 
      include( '../../Control/database.php'); 
      $cons = $conexion -> query("SELECT `idUsuario`, tipodocumento.DescripTipoDoc, tipousuario.DescripTipoUsua `idTipoUsuario`, `NombreUsuario`, `ApellidoUsuario`, `GeneroUsua`, `FechaNacUsua`, `ClaveUsua`, `DireccionUsua`, `CelUsua`, `CorreoUsua` FROM `usuario` INNER JOIN tipousuario ON usuario.idTipoUsuario = tipousuario.idTipoUsuario INNER JOIN tipodocumento ON usuario.IdTipoDoc = tipodocumento.idTipoDoc ");
      while ($row = $cons -> fetch_row()) {
       
     ?>

    <tr>
      <td><?php echo ''.$row[1].''; ?></td>
      <td><?php echo number_format(''.$row[0].''); ?></td>
      <td><?php echo ''.$row[2].''; ?></td>
      <td><?php echo ''.$row[3].''; ?></td>
      <td><?php echo ''.$row[4].''; ?></td>
      <td><?php echo ''.$row[5].''; ?></td>
      <td><?php echo ''.$row[6].''; ?></td>

      <td><?php echo ''.$row[8].''; ?></td>
      <td><?php echo ''.$row[9].''; ?></td>
      <td><?php echo ''.$row[10].''; ?></td>
     
       <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Modificar" name="Modifiusua" onclick="location='Modificarusu.php?id=<?php echo ''.$row[0].'' ?>'" ><span class="oi oi-pencil"></span></button></center></td>

       <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="Borrarusua" onclick="location='../../Control/Borrarusua.php?id=<?php echo ''.$row[0].'' ?>'" ><span class="oi oi-x"></span></button></center></td>
         
    </tr>
    <?php
    }
    ?>
  </table>
</div>
</div>


 </section>
</body>
<?php

include('pieadmin.php')?>
</html>

