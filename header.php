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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php home_url() ?>"><?php the_custom_logo(); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    wp_nav_menu(
                        [
                            "header_menu" => "primary_menu",
                            "container" => false,
                            "items_wrap" => '<ul class= "navbar-nav mr-auto mb-2 mb-md-0">%3$s</ul>'

                        ]
                    );
                    ?>
                    <form class="d-flex">
                        <input class="form-control ml-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>