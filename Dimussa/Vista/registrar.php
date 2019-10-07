<?php

include('header.php');

?>

<section class="container-fluid">
  <br><br>
  <div class="row">
      <div class="col-md-4">
     <center>  <img src="Publico/Media/img/cover4.jpg" class="card1" width="300" height="300"> <br><br>
            <h5>¿Ya tienes cuenta?</h5> 
            <a class="card-title"   href="index.php#modal1">Iniciar Sesión</a>
          </center>  
            
      </div>
        <div class="col-md-6">
          <Form method="post" action="../Control/Registrar.php">
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Tipo de Documento</label>
                  <select class="form-control" name="TipoDoc">
                  </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Documento</label>
                    <div class="input-group">
                       <input type="text" class="form-control" name="idusuario" class="form-control" placeholder="Número de Identificación">
                     </div> 
                 </div>
            </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Nombres</label>
                  <input type="text" name="Nombres" class="form-control" placeholder="Nombres">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Apellidos</label>
                  <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Género</label>
                  <select class="form-control" name="GeneUsu">
                          <option>F</option>
                          <option>M</option>
                  </select>
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Fecha Nacimiento</label>
                  <input type="date" name="FechaNac" class="form-control" placeholder="Nick de Usuario">
                </div>
                 <div class="form-group col-md-5">
                  <label for="exampleFormControlInput1">Contraseña</label>
                  <input type="password" name="PassUsua" class="form-control" placeholder="Contraseña">
                </div>
             </div>
             <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleFormControlInput1">Dirección</label>
                  <input type="text" name="DirUsua" class="form-control" placeholder="Dirección">
                </div>                 
             </div>
             <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">Celular</label>
                  <input type="text" name="CeluUsua" class="form-control" placeholder="Celular">
                </div>
                 <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1">E-mail</label>
                  <input type="mail" name="CorreoUsua" class="form-control" placeholder="Correo Electrónico">
                </div>
             </div>
             <br> <hr>
                   <button type="submit" name="registro" class="btn btn-primary">Registrarse</button> 
       </form>
      </div>
    </div> 

 <br><br>
</section>
</Form>
<?php
#Incluimos el pie de página:
include('footer.php');
?>
