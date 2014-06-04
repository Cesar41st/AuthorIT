<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 02/06/14
 * Time: 11:07
 */

?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title('&#124;', true, 'right'); ?></title>

    <!-- Scripts externes -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:900,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery.js"></script>


    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.less" type="text/less" />

    <script type='text/javascript' src="<?php bloginfo('template_directory'); ?>/js/boostrap.min.js"></script>
    <script type='text/javascript' src="<?php bloginfo('template_directory'); ?>/js/less-1.7.0.min.js"></script>



</head>

<body class="authorit_body">

    <div class="container">

        <header>

            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo wp_login_url(); ?>" title="Login">Se connecter</a></li>
                            <li><a href="<?php echo wp_registration_url(); ?>" title="Enregistrer">S'enregistrer</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>

            <?php get_search_form(); ?>
            <i class="fa fa-search"></i>


            <div id="header_logo">
                <a href="<?php get_site_url(); ?>" title="Logo">
                    <img class="logo img-responsive" src="<?php bloginfo('template_directory'); ?>/image/logo.png" alt="Logo" width="290" height="109">
                </a>
            </div>

                <!-- Menu -->
                <div class="sf-contener clearfix col-lg-12">
                    <?php

                    $defaults = array(
                        'theme_location' => 'header',
                    );

                    wp_nav_menu($defaults); ?>
                </div>

                <!--/ Menu -->
                <a href="" title="">
                    <img class="img-responsive" id="header_image" src="<?php bloginfo('template_directory'); ?>/image/header.jpg" alt="" title="" width="1170" height="65">
                </a>

        </header>

        <div id="wrap_page">