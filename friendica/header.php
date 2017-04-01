<!DOCTYPE html>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class("subpage"); ?>>
        <!-- Header -->
            <header id="header">
                <div class="inner">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                        <i class="fk-friendica-logo-char" aria-hidden="true"></i> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                    </a>

                    <nav id="nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'	=> 'main-menu',
                        'container'  => false
                    ));
                    ?>
                    </nav>
                    <!-- <nav id="nav">
                        <a href="index.html">Home</a>
                        <a href="generic.html">Generic</a>
                        <a href="elements.html">Elements</a>
                    </nav> -->
                    <!-- <div id="search">
                    <?php get_search_form(); ?>
                </div>-->
                    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
                </div>
            </header>

        <!-- Three -->
            <section id="three" class="wrapper">
                <div class="inner">
