<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes( $doctype ) ?> >
    	<html <?php language_attributes(); ?>>
    <head>
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html;charset="<?php bloginfo( 'charset' ); ?>"" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="<?php echo bloginfo('template_directory').'/css/menu.css';?>" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory').'/css/js-image-slider.css'?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo bloginfo('template_directory').'/js/js-image-slider.js'?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/js/tabs.js'?>"></script>
	<link href="<?php echo bloginfo('template_directory').'/css/generic.css'?>" rel="stylesheet" type="text/css" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- Bootstrap -->
    <link href="<?php echo bloginfo('template_directory').'/css/bootstrap-responsive.css'?>" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory').'/css/normalize.css'?>" rel="stylesheet">
    </head>
