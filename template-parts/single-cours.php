<?php 
    if (have_posts()) :            
        while(have_posts()) : the_post();?>
            <section>
            <?php the_title("<h1>", "</h1>");
            the_content(); ?>
                <p>Enseignant: <?php the_field("enseignant"); ?></p>
                <p>Domaine: <?php the_field("domaine"); ?></p>
                <p>Nombre maximal d'étudiants: <?php the_field("nombre_detudiant_maximum");?></p> 
                <p>Site du college: <?php the_field("site_college"); ?></p>
            </section>
        <?php endwhile;            
    endif;
?>