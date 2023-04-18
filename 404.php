<?php
    //Ceci est notre modele.
?>
<?php get_header(); ?>
<main class="site__main">
    <div class="page404">
        <h1>Erreur 404</h1>
        <h2>Page introuvable, vous pouvez tenter une recherche</h2>
        <?= get_search_form(); ?>
        <h2>Nos choix de cours</h2>
        <?php wp_nav_menu(array(
            "menu" => "cours",
            "container" => "nav"
        )); ?>
        <h2>Les notes de cours</h2>
        <?php wp_nav_menu(array(
            "menu" => "note-wp",
            "container" => "nav"
        )); ?>
    </div>   
</main>
<?php get_footer(); ?>