<?php

namespace Paradise\Setup;

class Enqueue
{
    public function register()
    {
        add_action('wp_enqueue_styles', [$this, 'addStyles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'addScripts'] );
    }

    public function addStyles()
    {
        wp_enqueue_style( "theme-css", get_template_directory_uri() . "/assets/css/style.css", [], "1.0", "all" );
    }

    public function addScripts()
    {
        wp_enqueue_script( "theme-scripts", get_template_directory_uri() . "/assets/js/scripts.js", [ 'jquery' ], "1.0", true );
    }
}
