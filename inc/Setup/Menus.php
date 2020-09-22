<?php

namespace Paradise\Setup;

class Menus
{
    public function register()
    {
        add_action( 'after_setup_theme', [$this, 'registerNavMenus' ] );
    }

    public function registerNavMenus()
    {
        register_nav_menus(
            [
                'primary_menu' => 'Primary Menu',
                'footer_menu' => 'Footer Menu'
            ]
        );
    }
}
