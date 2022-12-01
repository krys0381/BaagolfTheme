<?php
function load_resources()
{
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", array(), true);
}
add_action("wp_enqueue_scripts", "load_resources");

function blaagolf_register_menu_locations() {
    register_nav_menu("heared-nav-menu-location", "Header Navigation Menu Location");
    register_nav_menu("footer-nav-menu-location", "Footer Navigation Menu Location");
}
add_action("after_setup_theme", "blaagolf_register_menu_locations");

function blaagolf_setup_custom_logo() {
    add_theme_support("custom-logo");
}
add_action("after_setup_theme", "blaagolf_setup_custom_logo");