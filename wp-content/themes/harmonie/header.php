<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name') ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/main.css" /> 
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,800' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('class-name'); ?>>
    <header>
        <h1><a href="<?php echo home_url(); ?>" title="Vers la page d'accueil">Royale Harmonie Concodre st-Martin d'Antheit</a></h1>
    
    <nav class="first" role="navigation" id="nav">
        <h2 class="hiddenTitle">Navigation principale</h2>
            <?php wp_nav_menu(array('menu' => 'main',
                                    'depth' => '1' )); ?>
    </nav> 
    </header>