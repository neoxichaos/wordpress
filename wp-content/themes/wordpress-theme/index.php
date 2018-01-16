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
  <?php include_once('view/nav.php') ?>
  <header class="d-flex align-items-center justify-content-center">
    <section>
      <h1>CLA
        <br>SCO</h1>
    </section>
  </header>
  <section class="blanco_prod container">
    <div class="blanco-header col-lg-12">
      <span class="blanco-span d-flex justify-content-center">Lorem ipsun dolor sit amet</span>
      <h2 class="blanco-head">BLANCO PRODUCT</h2>
    </div>
    <div class="col-lg-12">

      <div class="row">
        <?php query_posts('category_name=produit&showposts=8'); ?>
        <!-- Début de la Boucle. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
        <!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
        <!-- Sinon, le bloc div reçoit la classe CSS "post". -->
        <?php if ( in_category('produit') ) { ?>
        <div class="col-lg-3 col-md-6 post-cat-two">
          <?php } else { ?>
          <div class="col-lg-3 col-md-6 post">
            <?php } ?>
            <div class="card-img-top" style="background-image: url('<?php the_field('image_article') ?>);"></div>
            <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->

            <div class="card-block">
              <h4 class="card-title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h4>
              <p class="text-center">
              <?php the_field('description_rapide'); ?>
              </p>
              <p class="card-text">
                <?php the_field('device'); ?>
                <?php the_field('prix'); ?>
              </p>
            </div>
          </div>
          <!-- Fin du premier bloc div -->

          <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
          <?php endwhile; else: ?>

          <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
          <!-- partie "else" indique que faire si ce n'est pas le cas. -->
          <p>Pas de post disponible</p>
          <!-- Fin REELLE de La Boucle. -->
          <?php endif; ?>
  </section>


  <section class="check_more container">
    <div class="header-check col-lg-12">
      <p>Lorem ipsum dolor sit amet</p>
      <h2>CHECK MORE BLANCO FEATURE</h2>
    </div>
    <div class="content-check">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .</p>
      <a href="#" class="btn btn-danger">MORE DETAIL</a>
    </div>
  </section>
  <section class="lastest container">
    <div class="header col-lg-12 d-flex flex-column justify-content-center ">
      <p class="text-center">lorem ipsum dolor sit amet</p>
      <h2 class="text-center">LASTEST FROM THE BLOG</h2>
    </div>
    <div class="body_last row">
      <p class="col-lg-12 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores repellat, cum aut nihil, porro sapiente magni odio
        laudantium vero fuga illo impedit sed? Explicabo, aperiam aliquam reiciendis voluptatum temporibus ipsam?</p>
      <?php query_posts('category_name=blog&showposts=4'); ?>
      <!-- Début de la Boucle. -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
      <!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
      <!-- Sinon, le bloc div reçoit la classe CSS "post". -->
      <?php if ( in_category('blog') ) { ?>
      <div class="col-lg-3 col-md-6 post-cat-two">
        <?php } else { ?>
        <div class="col-lg-3 col-md-6 post">
          <?php } ?>
          <div class="card-img-top" style="background-image: url('<?php the_field('image_article') ?>);"></div>

          <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->

          <div class="card-block">
            <h4 class="card-title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h4>
            <p class="card-desc"><?php the_time('F jS, Y'); ?> / <?php the_category(', '); ?> / <?php the_author(); ?></p>
            <p class="text-center">
              <?php the_field('description_rapide'); ?>
            </p>
            <p class="card-text">
              <?php the_field('device'); ?>
              <?php the_field('prix'); ?>
            </p>
          </div>
        </div>
        <!-- Fin du premier bloc div -->

        <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
        <?php endwhile; else: ?>

        <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
        <!-- partie "else" indique que faire si ce n'est pas le cas. -->
        <p>Pas d'article disponible</p>
        <!-- Fin REELLE de La Boucle. -->
        <?php endif; ?>
      </div>
  </section>
  <?php include_once('view/footer.php') ?>
</body>

</html>