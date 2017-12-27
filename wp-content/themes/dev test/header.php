<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php the_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory');?>/js/production.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'includes/nav-main' ); ?>
