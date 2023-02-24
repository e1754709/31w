<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>

    <header class="site__entete">  
        <section class="logo__menu">
            <?php the_custom_logo(); ?> 
            <div class="menusearch">
                <?php wp_nav_menu(array(
                    'menu' => 'entete',
                    'container' => 'nav'
                )); ?> 
                <?= get_search_form(); ?>   
            </div> 
        </section>
        <h1><a href="<?php  bloginfo('url'); ?>"><?php  bloginfo('name'); ?></a></h1> 
        <h2><?php  bloginfo('description'); ?></h2>
    </header>

    