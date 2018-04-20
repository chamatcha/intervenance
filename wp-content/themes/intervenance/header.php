<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    
    <link rel="stylesheet" id="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" type="text/css" media="all">
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/slick-1.6.0/slick/slick.min.js"></script>	
    <link href="<?php bloginfo('template_directory');?>/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css" type="text/css" media="screen">

    <title><?php wp_title() ?></title>
	<?php wp_head(); ?>
</head>
<body>
   
<header>
    <div class="container">
        <div class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-intervenance.png" alt="logo-intervenance">
        </div>
        
        <?php 
            $args = array(
            'menu_class' => 'menu',   
            'container' => 'nav'
        );
        wp_nav_menu( $args ); 
        ?>
        <a role="button" class="navbar-burger" id="burger-menu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    </header>
    