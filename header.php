<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="description" content="This is our blog.">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

        <link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/demianlabs" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,800' rel='stylesheet' type='text/css'>
		
        <?php wp_get_archives('type=monthly&format=link'); ?>
        <?php wp_head(); ?>
        
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/demian_flexible/js/modernizr-2.6.1.min.js"></script>
	</head>
	<body>
        <div class="header-container">
            <header class="wrapper clearfix">
                <div id="logozone">
                    <a href="<?php bloginfo('url');?>" id="logo"><?php bloginfo('name'); ?></a></h1>
                    <div id="moto" class="clearfix">A blog by <a href="http://demianlabs.com">Demian Labs</a></div>
                </div>
                
                <nav>
                    <?php
                        $args = array(
                            'orderby'   => 'name',

                        );
                        //wp_list_categories( $args );
                        foreach (get_categories( $args ) as $category){
                            echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
                        }
                   ?>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">



