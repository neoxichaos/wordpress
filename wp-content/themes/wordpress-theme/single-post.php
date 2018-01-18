<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
  
wp_head();


?>

  <body class="article ">
  <?php include_once('view/nav.php'); ?>
  <header></header>
    <div class="row col-lg-12 col-md-12 post">
      <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
      <div class="card-block row">
      <div class="card-img-top col-lg-6 col-md-12" style="background-image: url('<?php the_field('image_article') ?>);"></div>
        <h4 class="card-title ">
          <?php the_title(); ?>
          </a>
        </h4>
        <p class="text-center">
          <?php the_field('description_rapide'); ?>
        </p>
        <?php if ( in_category('produit') ) { ?>
        <p class="card-text">
          <?php the_field('device'); ?>
          <?php the_field('prix'); ?>
          <?php } else { ?>
          <p class="card-text">
            <?php } ?>
          </p>
      </div>
    </div>
    <?php include('view/footer.php');?>

  </body>