<aside class="site__aside">
    <h3>Menu secondaire</h3>
    <?php 
    $lemenu = "notes-31w";
    if (in_category('cours')) 
    {$lemenu = "cours";}
    wp_nav_menu(array(
        "menu" => $lemenu,
        "container" => "nav"
    )); ?>
</aside>