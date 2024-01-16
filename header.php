<!doctype HTML>
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

            <?php
                wp_nav_menu(array(
                        'menu' => 'header',
    
                    ));
                
            ?>
        </div>

        </header>