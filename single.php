<?php
    //Ceci est notre modele.
?>
<?php get_header(); ?>
<main class="site__main">
    <?php 
        if (in_category('cours')) :
            get_template_part("template-parts/single-cours");
        elseif(in_category('note-wp')) :
            get_template_part("template-parts/single-note");
        endif;?>
</main>
<?php get_footer(); ?>