<?php
/**
 * 
 * @package Paradise
 */

 if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php') ) :
    require_once dirname( __FILE__ ) . '/vendor/autoload.php' ;
    
 endif;

 Paradise\Init::register_classes();