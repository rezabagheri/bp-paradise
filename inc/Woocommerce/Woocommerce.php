<?php

namespace Paradise\Woocommerce;

class Woocommerce
{
    public function register()
    {
        add_action('after_setup_theme', array($this, 'Setup'));
    }

    public function Setup()
    {
        add_theme_support( 'woocommerce' );
    }
}