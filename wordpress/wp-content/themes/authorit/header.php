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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
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
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>



            <?php get_search_form(); ?>





            <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>

        </header>