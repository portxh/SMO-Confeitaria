<div class="">

  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleControls" data-slide-to="1"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active bg-home-1 vh-100">
        <div class="container h-100 d-flex flex-column justify-content-center">
          <img src="./site/img/logo.svg" alt="" class="h-25">
          <div class="text-center text-white">
            
            <h1 class="chamada display-4 mt-5">A melhor da região!</h1>
            <div class="w-75 mx-auto">

              <p class="slogan lead">Com maestria na arte da confeitaria e ingredientes cuidadosamente selecionados, somos a verdadeira definição do prazer açucarado.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item bg-home-2 min-vh-100">
        <div class="container h-100 d-flex flex-column justify-content-center pt-5">
          <div class="text-center text-white">
            <h2 class="mt-3 chamada display-4 pt-5">Ofertas</h2>
            <p class="slogan lead">A cada mordida, uma viagem inesquecível ao paraíso.</p>
            <?php if (isset($_SESSION["sessao"])) { echo "<p class='slogan lead'>Separamos estes produtos especialmente para você " .  $_SESSION['sessao']->nome . "</p>" ; }?>
            <div class="py-5 d-flex flex-wrap ofertas justify-content-center">

              <?php
              include 'ofertas.php';
              ?>

            </div>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>