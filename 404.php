<?php
    //Ceci est notre modele.
?>
<?php get_header(); ?>
<main class="site__main no-aside">
    <h1>Page introuvable, vous pouvez tenter une recherche</h1>
    <?= get_search_form(); ?>
    <h2>Nos choix de cours</h2>

    <?php wp_nav_menu(array(
        "menu" => "cours",
        "container" => "nav"
    )); ?>
    <h2>Les notes de cours</h2>
    <?php wp_nav_menu(array(
        "menu" => "notes-wp",
        "container" => "nav"
    )); ?>
        
</main>
<?php get_footer(); ?>