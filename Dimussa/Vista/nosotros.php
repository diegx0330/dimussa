<?php
include('header.php')
  ?>
  <style type="text/css">



.Modal{
  display: none;
  position: fixed;
  z-index:1;
  overflow:auto;
  left:0px;
  top:0px;
  width:100%;
  height:100%;
  background:#E8F8F5;
}
 .contenido-modal {
  position:relative;
  background-color: #7DCEA0;
  margin: auto;
  width: 30%;
  box-shadow: 0 0 6px 0 rgba(0,0,0, .4);
    animation-name: modal;
    animation-duration: 1s;
 }

@keyframes modal{
  from{top:-330px; opacity:0;}
  to{top:0; opacity:1;}
 }

 .cerrar{
  color: #fff;
  font-size: 30px;
  font-weight: bold;
 }
 .cerrar:hover{
  color: #000;
  text-decoration: none;
  cursor: pointer;
 }

  </style>
    <section>
      <article >
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="carousel-img" src="publico/media/img/car-1.jpg" class="d-block w-100" alt="..." height="300" width="80%" >
            </div>
          <div class="carousel-item">
             <img class="carousel-img" src="https://images2.alphacoders.com/698/thumb-1920-698137.jpg" class="d-block w-100" alt="..." height="300" width="90%">
          </div>
              <div class="carousel-item">
                <img class="carousel-img" src="https://images.alphacoders.com/176/thumb-1920-176123.jpg" class="d-block w-100" alt="..." height="300" width="90%">
              </div>
          </div>
        </div> 
      </article>
    <br>

<article style=" width: 80%; position:;margin: auto;">
    <div class="card-group">
       <div class="card">
    <img src="publico/media/img/th.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Anthony Osorio</h5>
      <p class="card-text" style="text-align: justify;">Soy un Estudiante de  Programación de software durante mi proyecto "Dimussa" Aprende jugando, Trabaje en el videojuegos y parte de la pagina web</p>

    </div>
  </div>
        <div class="card">
    <img src="publico/media/img/os.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Juan Ossa</h5>
      <p class="card-text" style="text-align: justify;">soy un Estudiante que me gusta el diseño. durante mi proceso me enfoque en el diseño de esta plataforma "Dimussa</p>
 
    </div>
  </div>
  <div class="card">
    <img src="publico/media/img/dx.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Diego Vélez</h5>
      <p class="card-text"  style="text-align: justify;">Soy un estudiante de Programación de software me considero una persona muy respetuosa y me gusta mucho la programacion trabaje duramente para llevar a cabo esta plataforma educativa "Dimussa" Aprende jugando</p>
    </div>
  </div>

  <div class="card">
    <img src="publico/media/img/st.jpg" class="card-img-top" alt="..." height="360">
    <div class="card-body">
      <h5 class="card-title">Stiven Mosquera</h5>
      <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>

</article>


              <br>
            <br>
            <br>
            <section>
            <div class="card-deck" style=" width: 82%; margin: auto;">
          <div class="card" >
            <div class="card-body" >
              <h5 class="card-title" style="font-size: 30px;">Misión</h5>
              <p style="text-align: justify; font-size: 20px;"><cite>Desarrollar una educación con calidad académica y técnica, fundamentada en principios humanistas formando ciudadanos laboral y socialmente competentes con sólidos valores y principios éticos que les permitan asumir la construcción de su proyecto de vida, su compromiso con la transformación de su entorno y con una clara conciencia ambiental. </cite></p>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 30px;">Visión</h5>
              <p style="text-align: justify; font-size: 20px;"><cite>Para el 2020 seremos una institución líder en el Programación de programas con calidad académica y técnica, desarrollada con base en la innovación, la investigación y la inclusión; contextualizando sus procesos que permitan la vinculación de nuestros estudiantes a la educación superior y/o a la vida laboral.</cite></p>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 30px;">Valores corporativos</h5>
              <p style="text-align: justify; font-size: 20px;"><cite>Para el 2020 seremos una institución líder en el Programación de programas con calidad académica y técnica, desarrollada con base en la innovación, la investigación y la inclusión; contextualizando sus procesos que permitan la vinculación de nuestros estudiantes a la educación superior y/o a la vida laboral.</cite></p>
            </div>
          </div>
        </div>
      
  </section>
  <br>  


  <?php 
include('footer.php')
 ?>
  </body>
</html>