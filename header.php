<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta name="description" content="<?php bloginfo("description"); ?>" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <!--[if IE]>
        <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />

</head>
<body <?php body_class(); ?>>

    <div class="wrapper">

        <header>
            <a class="branding" href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
            <nav>
                <ul>
                    <?php wp_nav_menu(array(
                        'sort_column' => 'menu_order',
                        'container_class' => 'menu-header',
                        'menu' => 'Header',
                        'container' => '',
                        'items_wrap' => '%3$s'
                    )); ?>
                </ul>
            </nav>
        </header>
