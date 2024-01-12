<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ce2717f817.js" crossorigin="anonymous"></script>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    rel="home"><?php bloginfo( 'name' ); ?></a>
                <div id="menu-links">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"
                                alt="logo Fleurs d'oranger & chats errants" /></li>
                        <li id="story-menu"><a href="#story" class="dynamic-title">Histoire</a></li>
                        <li id="characters-menu"><a href="#characters" class="dynamic-title">Personnages</a></li>
                        <li id="place-menu"><a href="#place" class="dynamic-title">Lieu</a></li>
                        <li id="studio-menu"><a href="#studio" class="dynamic-title">Studio Koukaki</a></li>
                    </ul>
                    <a href="#" id="menu-footer">STUDIO KOUKAKI</a>
                </div>
                <a href="javascript:void(0);" id="menu-icon" onclick="toggleMenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </header>