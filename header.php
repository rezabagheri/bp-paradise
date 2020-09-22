<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?= bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo('title'); ?> </title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <section class="site-logo">Logo</section>
        <section class="site-nav">
            <?php 
            wp_nav_menu(
                [
                   "header_menu" => "primary_menu" 
                ]
            );
            ?>
        </section>
    </header>