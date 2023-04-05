<?php
    //Ceci est notre modele.
?>
<?php get_header(); ?>
<main class="site__main">

    <section class="viewport">
        <h4>Cours: 31w - Introduction a un Gestionnaire de Contenu</h4>
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav",
            "container_class"=>"menu__bloc"
        )); ?>
    </section>
    <section class="blocflex">
        <?php 
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <?php 
                $ma_categorie = "note-wp";
                if (in_category('galerie')) {$ma_categorie = "galerie";}
                get_template_part("template-parts/categorie", $ma_categorie); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>