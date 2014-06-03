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

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.less" type="text/css" />


    <scrip src="<?php bloginfo('template_directory'); ?>/js/boostrap.min.js"></scrip>

    <?php wp_head(); ?>

</head>

<body class="authorit_body">

    <header>

        <?php wp_nav_menu( array( 'theme_location' => 'Social Menu' ) ); ?>

        <?php wp_nav_menu( array( 'theme_location' => 'Header Menu' ) ); ?>

    </header>