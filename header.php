<!doctype HTML>
    <html>
    <head>
        <?php 
            wp_head() 
        ?>

    </head>

    <?php

    $logo_allonge=get_field('logo_header','option');
    ?>
    <body>
        <header >
        <div class="display black menu margin_side">
            <img class="logo"
                src="<?php echo ($logo_allonge['sizes']["logo_header"]);?>" 
                height="<?php echo ($logo_allonge['sizes']["logo_header-height"]);?>" 
                width="<?php echo ($logo_allonge['sizes']["logo_header-width"]);?>" 
                alt="<?php echo ($logo_allonge['alt']);?>"
            />
            <!-- <nav id=#nav> -->
                <?php
                    wp_nav_menu(array(
                            'menu' => 'header',
        
                        ));
                    
                ?>
            <!-- <img class="burger"src="<?php echo get_template_directory_uri() . '/illustration/menu_burger.png';?>">
            <img class="cross"src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_blanche.png';?>"> 
            </nav> -->
        </div>

        </header>