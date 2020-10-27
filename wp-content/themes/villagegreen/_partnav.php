<nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-0  mb-3">
  <?php
  $custom_logo_id = get_theme_mod('custom_logo');

  $aLogo = wp_get_attachment_image_src($custom_logo_id, 'medium');

  if (has_custom_logo()) { // Si un logo a été défini
    echo '<a href="' . get_bloginfo('url') . '" title="' . get_bloginfo('name') . '"><img src="' . esc_url($aLogo[0]) . '" alt="' . get_bloginfo('name') . '" title="' . get_bloginfo('name') . '" class="img-fluid"></a>';
  } else {   // Sinon on affiche le nom du site
    echo '<h1>' . get_bloginfo('name') . '</h1>';
  }
  ?>
  <a class="navbar-brand ml-2" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php wp_nav_menu([
    'theme_location' => 'header',
    'depth'             => 5,
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker()


  ]) ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
  <?= get_search_form() ?>
  </div>

</nav>