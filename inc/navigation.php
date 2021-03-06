<?php

function bm_header_menu() {
  wp_nav_menu(array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => false,
    'menu_class'        => 'navbar-nav bm-novecento-sans',
    'walker'			      => new WP_Bootstrap_Navwalker()
  ));
}

function bm_session_menu() {
  wp_nav_menu(array(
    'menu'              => 'session',
    'theme_location'    => 'session',
    'depth'             => 1,
    'container'         => false,
    'menu_class'        => 'd-flex m-0 ms-auto list-unstyled gap-3',
  ));
}

function bm_session_menu_mobile() {
  wp_nav_menu(array(
    'menu'              => 'session',
    'theme_location'    => 'session',
    'depth'             => 1,
    'container'         => false,
    'menu_class'        => 'navbar-nav d-flex d-xl-none bm-novecento-sans',
    'walker'			      => new WP_Bootstrap_Navwalker()
  ));
}

function bm_footer_menu() {
  wp_nav_menu(array(
    'menu'              => 'footer',
    'theme_location'    => 'footer',
    'depth'             => 1,
    'container'         => false,
    'menu_class'        => 'd-flex flex-column flex-xl-row f m-0 list-unstyled gap-3'
  ));
}

function bm_menu_item_class($classes, $item, $args) {
    if(isset($args->menu_item_class)) {
        $classes[] = $args->menu_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'bm_menu_item_class', 1, 3);
