<!doctype HTML>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            wp_head() 
            
        ?>

    </head>

    <?php
    $logo_allonge=get_field('logo_header','option');
    ?>
    <body>
    <header >

    <div class="mobile_only">
            <a href="<?php echo(get_home_url()) ?>">
                <img class="logo"
                    src="<?php echo ($logo_allonge['sizes']["logo_header"]);?>" 
                    height="<?php echo ($logo_allonge['sizes']["logo_header-height"]);?>" 
                    width="<?php echo ($logo_allonge['sizes']["logo_header-width"]);?>" 
                    alt="<?php echo ($logo_allonge['alt']);?>"
                />
            </a>
        <div class="burger_click">
            <div class="">
            <span class="line burger"></span>
            <span class="line2 burger"></span>
            <span class="line3 burger"></span>
            </div>
            <div class="menu_burger">
                <?php wp_nav_menu(array(
                        'menu' => 'header',));?>
            </div>
        </div>

    </div>

    <div class="desktop_only">
        <div class="display black menu margin_side ">
            <a href="<?php echo(get_home_url()) ?>">
                <img class="logo"
                    src="<?php echo ($logo_allonge['sizes']["logo_header"]);?>" 
                    height="<?php echo ($logo_allonge['sizes']["logo_header-height"]);?>" 
                    width="<?php echo ($logo_allonge['sizes']["logo_header-width"]);?>" 
                    alt="<?php echo ($logo_allonge['alt']);?>"
                />
            </a>
            <?php
                wp_nav_menu(array(
                    'menu' => 'header',
                ));
            ?>
        </div>
    </div>


    

    
    </header>