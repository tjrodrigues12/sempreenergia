<?php
/* WIDGETS */

// Registrar Walker de Navegação Personalizado
require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
//require_once('wp_bootstrap_navwalker.php');

if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
}

function register_my_menu()
{
  register_nav_menu('header-menu', __('Header Menu'));
  register_nav_menu('footer-menu1', __('Footer Menu 1'));
  register_nav_menu('footer-menu2', __('Footer Menu 2'));
  register_nav_menu('footer-menu3', __('Footer Menu 3'));
}

add_action('init', 'register_my_menu');

//Adiciona suporte a Post Thumbnails no Tema
add_theme_support( 'post-thumbnails' );
