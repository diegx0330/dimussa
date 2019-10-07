<?php include( 'Cabezadmin.php'); 
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 


?>

<section class="container-fluid">
  <br>
  <br> 
<div>
   <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#usuario" role="tab" aria-controls="home" aria-selected="true">Reporte de usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Ventas" role="tab" aria-controls="profile" aria-selected="false">Reporte de Ventas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Productos" role="tab" aria-controls="contact" aria-selected="false">Reporte de Producto</a>
          </li>
           
        </ul>
           <!--Creamos el contenido de cada tarjeta . -->
        <div class="tab-content" id="myTabContent">
           <!--Creamos Tipo usuario. -->
          
          <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
              <!--Creamos una tabla donde se mostraràn los reportes-->
            <div style="margin-right:3rem; margin-left: 3rem;" >
  
             <br><center> <h2>Reporte de usuarios</h2></center> <br>

           <form action=export_data.php" method="post">
              <center><button type="submit" id="export_data" name='export_data' value="Export to excel"  class="btn btn-info">Exportar a Excel</button></center>
          </form>
    

    <div class="container-fluid">
    <table  class="table mt-3" border="2">
      <thead class="thead-dark">
          <th>Tipo Doc.</th>
          <th>Documento</th>
          <th>Tipo usuario</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Género</th>
          <th>Fecha Nacimiento</th>
          <th>Contraseña</th>
          <th>Dirección</th>
          <th>Celular</th>
          <th>E-mail</th>
         
       
      </thead>
    <?php 
      include( '../../../Control/conex.php'); 
      $cons = $conexion -> query("SELECT `idUsuario`, tipodocumento.DescripTipoDoc, tipousuario.DescripTipoUsua `idTipoUsuario`, `NombreUsuario`, `ApellidoUsuario`, `GeneroUsua`, `FechaNacUsua`, `ClaveUsua`, `DireccionUsua`, `CelUsua`, `CorreoUsua` FROM `usuario` INNER JOIN tipousuario ON usuario.idTipoUsuario = tipousuario.idTipoUsuario INNER JOIN tipodocumento ON usuario.IdTipoDoc = tipodocumento.idTipoDoc  ");
      $developer_records = array();

      while ($row = $cons -> fetch_row()) {
            $developer_records[] = $rows;
     ?>

    <tr>
      <td><?php echo ''.$row[1].''; ?></td>
      <td><?php echo ''.$row[0].''; ?></td>
      <td><?php echo ''.$row[2].''; ?></td>
      <td><?php echo ''.$row[3].''; ?></td>
      <td><?php echo ''.$row[4].''; ?></td>
      <td><?php echo ''.$row[5].''; ?></td>
      <td><?php echo ''.$row[6].''; ?></td>
      <td><?php echo ''.$row[7].''; ?></td>
      <td><?php echo ''.$row[8].''; ?></td>
      <td><?php echo ''.$row[9].''; ?></td>
      <td><?php echo ''.$row[10].''; ?></td>
   
             
    </tr>
    <?php }
      
        
     ?>
  </table>


</div>
          </div>
           </div>



            <!--Creamos los reportes de VENTAS -->
          <div class="tab-pane fade" id="Ventas" role="tabpanel" aria-labelledby="profile-tab">

             <br><center> <h2>Reporte de Ventas</h2></center> <br>
            <h4> Recuerden que en Boostrap podràn encontrar todo tipo de componentes, como por ejemplo Tablas:

           https://getbootstrap.com/docs/4.0/content/tables/ </h4>
         </div>
            <!--Creamos los reportes de PRODUCTOS -->
          <div class="tab-pane fade" id="Productos" role="tabpanel" aria-labelledby="contact-tab">
           <br><center> <h2>Reporte de Productos</h2></center> <br>

          </div>
          
        </div>
  </div>      
  </section>

</body>
</html>