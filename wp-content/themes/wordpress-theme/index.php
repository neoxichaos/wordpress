<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Template </title>
  <?php wp_head(); ?>

</head>

<body class="container-fluid home">
 <?php
  include_once('view/nav.php')
 ?>
  <header></header>
  <section class="blanco_prod container">
    <div class="blanco-header col-lg-12">
      <span class="blanco-span d-flex justify-content-center">Lorem ipsun dolor sit amet</span>
      <h1 class="blanco-head">BLANCO PRODUCT</h1>
    </div>

    <div class="col-lg-12">

      <div class="row">

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card-img-top"></div>
          <div class="card-block">
            <h4 class="card-title">Velvet Sequins</h4>
            <p class="card-text">$59.90</p>
          </div>
        </div>
      </div>
  </section>


  <section class="check_more container">
    <div class="header-check col-lg-12">
      <p>Lorem ipsum dolor sit amet</p>
      <h2>CHECK MORE BLANCO FEATURE</h2>
    </div>
    <div class="content-check">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .</p>
      <button class="btn btn-danger">MORE DETAIL</button>
    </div>
  </section>
  <?php /* Primary navigation */
            wp_nav_menu( array(
            'menu' => 'menu-secondaire',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0',
            'container_class' => 'test',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
            );
        ?>
  <footer class="container">
    <hr class="col-lg-12">
    <p>Créer par ..</p>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>