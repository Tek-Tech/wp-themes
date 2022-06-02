<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php
        wp_head()
    ?>
</head>

<body <?php body_class(); ?>>

    <div class='container'>
        <header class="site-header" <?php if ( get_header_image() ) : ?> style='background-size:100% 100%;min-height:96vh;background-image:url(<?php header_image() ?>);' <?php endif; ?>>
            <div class="header-search">
                <?php get_search_form(); ?>
            </div>
            <h1>
                <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>         
            <h4><?php bloginfo( 'description' ); ?></h4> 
            <nav class="navigation-menu">
			    <?php wp_nav_menu() ?>
            </nav>
        </header>
    </div>
    <div class='container mainbox'>
