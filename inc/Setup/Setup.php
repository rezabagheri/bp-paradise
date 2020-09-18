<?php

namespace Paradise\Setup;

class Setup
{
    public function register()
    {
        add_action('after_setup_theme', array($this, 'setup'));
        add_action('after_setup_theme', array($this, 'content_width'), 0);
    }

    public function setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    
        add_theme_support( 'custom-background', apply_filters( 'awps_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        add_theme_support( 'post-formats', array( 
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        ) );

        add_theme_support( 'custom-logo', array(
            'height' => 480,
            'width'  => 720,
        ) );
    }

    public function content_width()
    {
        $GLOBALS[ 'content_width' ] = apply_filters( 'content_width', 1440 );
    }
}