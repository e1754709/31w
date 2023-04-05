<?php 
    if (have_posts()) :            
        while(have_posts()) : the_post();?>
            <section>
            <?php the_title("<h1>", "</h1>");
            the_content();?>
            <p>Email enseignant: <?php the_field("email_enseignant"); ?></p>
            <p>Niveau de difficulté: <?php the_field("niveau_de_difficulte");?></p> 
            </section>
        <?php endwhile;            
    endif;
?>