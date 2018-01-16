<nav class="nav-bar container-fluid">
    <div class="container navbar navbar-toggleable-md navbar-light bg-faded nav-bar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
        <?php /* Primary navigation */
            wp_nav_menu( array(
            'menu' => 'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0',
            'container_class' => 'test',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
            );
        ?>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>