  <?php
  include('header.php')
    ?>
<style type="text/css">

  body{
    background-image: url(media/img/cover4.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color: white;
  }
	.section{ 
    background: rgba(0, 0, 0, 0.4117647058823529);
    margin: auto;
    padding: 1%;
    height: 30em;
		width: 30%;
    border-radius: 8px;
    margin-bottom: 10em;
	}
</style>
<body>
<section class="section">
	<form>

	<form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Nombre</label>
          <input type="text" class="form-control" id="inlineFormInputName" placeholder="Nombre">
      </div>

      <div class="form-group col-md-6">
          <label for="inlineFormInputName">Usuario</label>
            <input type="text" class="form-control" id="inlineFormInputName" placeholder="@Usuario">
      </div>
    </div>
		</div>
	</form>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  	 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Confirmar correo</label>
      <input type="remail" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirma contraseña</label>
      <input type="repassword" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cuidad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Genero</label>
      <select id="inputState" class="form-control">
        <option selected>Escoger...</option>
        <option>Hombre</option>
        <option>Mujer</option>
        <option>Indefinido</option>
      </select>
    </div>
        <div class="form-group col-md-2">
      <label for="inputState">Edad</label>
      <select id="inputState" class="form-control">
        <option selected>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check" >
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirmar
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-bottom: 20em;">Registrar</button>
</form>
<?php   
    if (isset($_POST['submit'])) {
     
     echo "Finalizado";
    } ?>
</section>
<?php 
include('footer.php')
     ?>
</body>
</html>