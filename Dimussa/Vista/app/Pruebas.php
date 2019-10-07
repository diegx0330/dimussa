<?php 
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 
include( 'Cabezadmin.php'); 


?>
 <style type="text/css">
   *{
    color: black;
   }
 </style>
 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>

<section class="container" >
  <h2 style="text-align: center;">Pruebas</h2> 

<form method="POST" action="../../Control/GuardarPrueba.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Número Prueba</label>
    <input type="number" class="form-control" name="NumPrueba" id="exampleFormControlInput1" placeholder="Número de Prueba">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre Prueba</label>
    <input type="text" class="form-control" name="NombPrueba" id="exampleFormControlInput1" placeholder="nombre de prueba">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Descripción Prueba</label>
    <input type="text" class="form-control" name="Descrprueba" id="exampleFormControlInput1" placeholder="Descripción">
  </div>
  

      </div>

   <div class="col-md-12 justify-content-center">
    <center><button type="submit" class="btn btn-primary"  name="BtnGuardar" >Guardar</button> 
    <button type="reset" class="btn btn-primary"  name="BtnLimpiar" >Limpiar</button></center> <br>
   </div> 
    <div class="container-fluid" style="margin-left: 5%;">
  <div class="row">
  <div class="col-md-10 mx-5 ">
    <table  class="table mt-3 " border="1">
      <thead class="thead-dark">
          <th><center>Nombre de la prueba</center></th>
          <th style="width: 4rem"><center>Desc prueba</center></th>
          <th style="width: 4rem"><center>Desc prueba</center></th>
          <th><center>Editar </center></th>
          <th style="width: 6rem"><center>Eliminar</center> </th>
       
      </thead>
    <?php 
      include( '../../Control/database.php'); 
      $cons = $conexion -> query("SELECT NombPrueba, Descrprueba, Idprueba from prueba");
      while ($row = $cons -> fetch_row()) {
       
     ?>
    <tr>
      <td><?php echo ''.$row[1].''; ?></td>
      <td><?php echo number_format(''.$row[0].''); ?></td>
      <td><?php echo ''.$row[2].''; ?></td>
       <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Modificar" name="Modifiusua" onclick="location='Modificarusu.php?id=<?php echo ''.$row[0].'' ?>'" ><span class="oi oi-pencil"></span></button></center></td>

       <td> <center><button type="submit" class="btn-outline-success btn-sm"  value="Eliminar" name="Borrarusua" onclick="location='../../Control/Borrarusua.php?id=<?php echo ''.$row[0].'' ?>'" ><span class="oi oi-x"></span></button></center></td>
         
    </tr>
    <?php
    }
    ?>
  </table>
</form>
<form method="POST" action="../../Control/Guardarpregunta.php">
  <h2 style="text-align: center;">Preguntas</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">Numero de pregunta</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Respuesta" name="NumbPregunta">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Pregunta</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Respuesta"name="Pregun">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">A que prueba pertenece</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Respuesta"name="Idprueba">
  </div>

     <div class="col-md-12 justify-content-center">
                  <center><button type="submit" class="btn btn-primary"  name="BtnGuardar" >Guardar</button> 
                  <button type="reset" class="btn btn-primary"  name="BtnLimpiar" >Limpiar</button></center> <br>
             </div>
</form>


</form>
<form method="POST" action="../../Control/GuardaRespuesta.php">
  <h2 style="text-align: center;">Respuesta</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">Id de la respuesta</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Respuesta" name="respuesta">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Id de la pregunta </label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Respuesta"name="preCorres">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">letra de la pregunta</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Respuesta"name="Idrespuesta">
  </div>

     <div class="col-md-12 justify-content-center">
                  <center><button type="submit" class="btn btn-primary"  name="BtnGuardar" >Guardar</button> 
                  <button type="reset" class="btn btn-primary"  name="BtnLimpiar" >Limpiar</button></center> <br>
             </div>
</form>






</body>
</html>

   
 