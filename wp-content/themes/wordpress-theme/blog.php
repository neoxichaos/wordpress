<?php
/* 
Template name: blog
*/
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<title>Document</title>

<?php wp_head(); ?>

</head>

<body class="blog container">
<?php
// include_once('view/nav.php');
?>

<!-- Nav menu with search -->
<header class="d-flex align-items-center justify-content-start row">
<h1 class="col-lg-4">CLASSICO</h1>
<div class="input-group col-lg-4">
<input type="text" class="form-control" placeholder="Search for product">
<div class="input-group-append">
<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown">All categories</button>

<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
aria-expanded="false">
<span class="sr-only ">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
</div> 

</header>

<div class="row">

<?php query_posts('category_name=blog&showposts=9'); ?>
<!-- Début de la Boucle. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
<!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
<!-- Sinon, le bloc div reçoit la classe CSS "post". -->
<?php if ( in_category('blog') ) { ?>
<div class="col-lg-4 col-md-6 post-cat-two">
<?php } else { ?>
<div class="col-lg-3 col-md-6 post">
<?php } ?>
<div class="card-img-top" style="background-image: url('<?php the_field('image_article') ?>');background-repeat:no-repeat; background-size:cover; height:200px;"></div>
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
</div>



<?php include_once('view/footer.php'); ?>

</body>

</html>