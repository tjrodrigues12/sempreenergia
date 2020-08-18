<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Thiago José J. Rodrigues, and Bootstrap contributors">
  <title><?php wp_title(''); ?></title>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap-4.1.3/css/bootstrap.min.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap-4.1.3/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-5.11.2/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-5.11.2/css/brands.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-5.11.2/css/solid.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-5.11.2/js/fontawesome.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-5.11.2/js/brands.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-5.11.2/js/solid.js"></script>

  <!-- Stylesheet -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!-- Owl Caroulsel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Scripts -->
  <script>
    var uri = "<?php echo get_template_directory_uri(); ?>";
  </script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

  <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="slider">
    <?php echo do_shortcode('[serious-slider id="3"]'); ?>
  </div>
  <header>
    <nav class="navbar navbar-expand-md">
      <div>
        <a class="navbar-brand" href="/">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/sempre-energia-logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div>
        <div class="collapse navbar-collapse">
          <?php
          wp_nav_menu(
            array(
              'menu'              => 'primary',
              'theme_location'    => 'header-menu',
              'depth'             => 2,
              'container'         => 'ul',
              'container_class'   => 'nav-item active',
              'container_id'      => 'navbar',
              'menu_class'        => 'navbar-nav mr-auto align-right',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker()
            )
          );
          ?>
        </div>
      </div>
    </nav>
  </header>
  <div class="cal-social-bar">
    <a href="tel:556730277225" title="Telefone: (67) 3027-7225">
      <span class="btn__text type--bold">
        Ligue: (67) 3027-7225
      </span>
    </a>
    <a href="https://www.facebook.com/Sempreenergia" target="_blank">
      <i class="socicon socicon-facebook text-white"></i>
    </a>
    <a href="https://www.linkedin.com/company/25177090/" target="_blank">
      <i class="socicon socicon-linkedin text-white"></i>
    </a>
  </div>
  <main role="main">