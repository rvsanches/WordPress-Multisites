<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
</head>
<body class="bg-light">

<?php wp_head(); ?>

<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="m-0"><?php echo get_bloginfo('name'); ?></h1>
                <p class="m-0"><?php echo get_bloginfo('description'); ?></p>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5" role="navigation">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Expandir menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'topo',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarHeader',
            'menu_class'        => 'nav navbar-nav mx-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

    </div>
</nav>