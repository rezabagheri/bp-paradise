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
                <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- <ul class="navbar-nav mr-auto mb-2 mb-md-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul> -->
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
                        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <header>
        <section class="site-logo">Logo</section>
        <section class="site-nav">

        </section>
    </header>

    <main>