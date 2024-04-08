<?php

function add_webpack_plugin(){
    echo '<script src="' . esc_url( get_template_directory_uri() . '/dist/bundle.js' ) . '"></script>';
}

add_action('wp_head','add_webpack_plugin');