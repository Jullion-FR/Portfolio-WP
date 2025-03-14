<?php

// Charger les styles du thème parent
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('neve-parent-style', get_template_directory_uri().'/style.css');
});
require_once get_stylesheet_directory() . '/cpt-portfolio.php';
