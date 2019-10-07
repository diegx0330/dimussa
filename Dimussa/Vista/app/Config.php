<?php include( 'Cabezadmin.php'); 
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 
?>

<section class="container-fluid">
   <br> 
     <div class="row" style="margin: 2rem">
          <!--Insertamos menu vertical al lado derecho -->
          <div class="col-md-3">
              <h4 class="card-title text-center">Configuración</h4>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link lead active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-TipoUsuario" role="tab" aria-controls="v-pills-home" aria-selected="true">Tipo Usuario</a>
              <a class="nav-link lead" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-TipoDoc" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tipo Documento</a>
              <a class="nav-link lead" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-TipoProd" role="tab" aria-controls="v-pills-messages" aria-selected="false">Tipo Productos</a>
              
            </div>
          </div>
         
          <!--Aca insertamos los formularios de cada secciòn -->
          <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-TipoUsuario" role="tabpanel" aria-labelledby="v-pills-home-tab">
                     <div class="card border-success">
                        <div class="card-body">
                             <h4 class="card-title text-center">Tipo usuario</h4>
                              <hr  class="bg-success">
                            <form  action="../../../Control/GuardarTipoUsu.php" method="POST">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Número Tipo usuario</label>
                                  <input type="number" class="form-control" name="idTipous"  placeholder="Número Tipo usuario" required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Descripción Tipo usuario</label>
                                  <input type="text" class="form-control" name="NombreTipous" placeholder="Descripción Tipo usuario" required>
                                </div>
                               
                               <center><button type="submit" name="GuardaTipous" class="btn btn-primary">Guardar</button></center>  
                              </form>
                             <hr  class="bg-success">
                        </div>

                                 <!--Creamos tabla donde consultar todos los registros de Tipo de usuario -->
                  <div class="container">
                        <table  class="table mt-3" border="1">
                          <thead class="thead-dark">
                              <th style="width: 10rem" ><center>Cód. Tipo Usuario</center></th>
                              <th style="width: 20rem" ><center>Descripción Tipo de Usuario</center></th>
                              <th style="width: 5rem" ><center>Eliminar</center> </th>
                          </thead>
                        <?php 
                          include( '../../../Control/conex.php'); 
                          $cons = $conexion -> query("SELECT * FROM tipousuario");
                          while ($row = $cons -> fetch_row()) {
                           
                         ?>

                        <tr>
                          <td><?php echo ''.$row[0].''; ?></td>
                          <td><?php echo ''.$row[1].''; ?></td>
                       
                           <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="BorrarTipousua" onclick="location='../../../Control/BorrarTipoUsua.php?id=<?php echo ''.$row[0].'' ?>'" ><span class="oi oi-x"></span></button></center></td>
                             
                        </tr>
                        <?php } ?>
                      </table>
              </div>
        </div>
      </div>

                 <!--TIPO DOCUMENTO -->
              <div class="tab-pane fade" id="v-pills-TipoDoc" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card border-success">
                       <div class="card-body">
                             <h4 class="card-title text-center">Tipo de Documento</h4>
                              <hr  class="bg-success">
                            <form  action="../../../Control/GuardarTipoDoc.php" method="POST">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Número Tipo de Documento</label>
                                  <input type="number" class="form-control" name="idTipoDoc"  placeholder="Número Tipo usuario" required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Descripción Tipo de Documento</label>
                                  <input type="text" class="form-control" name="NombreTipoDoc" placeholder="Nombre Tipo usuario" required>
                                </div>
                               
                               <center><button type="submit" name="GuardaTipoDoc" class="btn btn-primary">Guardar</button></center>  
                              </form>
                             <hr  class="bg-success">
                        </div>

                            <div class="container">
                                <table  class="table mt-3" border="1">
                                  <thead class="thead-dark">
                                      <th style="width: 10rem" ><center>Cód. Tipo Documento</center></th>
                                      <th style="width: 20rem" ><center>Descripción Tipo Documento</center></th>
                                      <th style="width: 5rem" ><center>Eliminar</center> </th>
                                  </thead>
                                <?php 
                                  include( '../../../Control/conex.php'); 
                                  $cons = $conexion -> query("SELECT * FROM tipodocumento");
                                  while ($row1 = $cons -> fetch_row()) {
                                   
                                 ?>

                                <tr>
                                  <td><?php echo ''.$row1[0].''; ?></td>
                                  <td><?php echo ''.$row1[1].''; ?></td>
                               
                                   <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="BorrarTipodoc" onclick="location='../../../Control/BorrarTipoDoc.php?id=<?php echo ''.$row1[0].'' ?>'" ><span class="oi oi-x"></span></button></center></td>
                                     
                                </tr>
                                <?php } ?>
                              </table>
                      </div>
                      </div>
            </div>
              <!--TIPO PRODUCTO -->
              <div class="tab-pane fade" id="v-pills-TipoProd" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     <div class="card border-success">
                        <div class="card-body">
                             <h4 class="card-title text-center">Tipo de Producto</h4>
                              <hr  class="bg-success">
                            <form  action="../../../Control/GuardarTipoProd.php" method="POST">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Número Tipo de Producto</label>
                                  <input type="number" class="form-control" name="idTipoProd"  placeholder="Número Tipo Producto" required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Descripción Tipo  de Producto</label>
                                  <input type="text" class="form-control" name="NombreTipoProd" placeholder="Descripción tipo de producto" required>
                                </div>
                               
                               <center><button type="submit" name="GuardaTipoProd" class="btn btn-primary">Guardar</button></center>  
                              </form>
                             <hr  class="bg-success">
                        </div>

                            <div class="container">
                                <table  class="table mt-3" border="1">
                                  <thead class="thead-dark">
                                      <th style="width: 10rem" ><center>Cód. Tipo de Producto</center></th>
                                      <th style="width: 20rem" ><center>Descripción Tipo de Producto</center></th>
                                      <th style="width: 5rem" ><center>Eliminar</center> </th>
                                  </thead>
                                <?php 
                                  include( '../../../Control/conex.php'); 
                                  $cons = $conexion -> query("SELECT * FROM tipoproducto");
                                  while ($row2 = $cons -> fetch_row()) {
                                   
                                 ?>

                                <tr>
                                  <td><?php echo ''.$row2[0].''; ?></td>
                                  <td><?php echo ''.$row2[1].''; ?></td>
                               
                                   <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="BorrarTipousua" onclick="location='../../../Control/BorrarTipoProd.php?id=<?php echo ''.$row2[0].'' ?>'" ><span class="oi oi-x"></span></button></center></td>
                                     
                                </tr>
                                <?php } ?>
                              </table>
                      </div>
                      </div>
                 
              </div>
            </div>
          </div>
        </div>
   
 </section>

</body>
</html>