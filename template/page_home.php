<?php
    /* Template Name: Accueil */

    get_header();
    $background=get_field('background');
    $logo=get_field('logo');
    $title=get_field('title');
    $where=get_field('where');
    //echo('<pre>');
    //var_dump($background);
    //echo('</pre>');

    $informations=get_field('i_informations');
    $boolean=get_field('true_false');
    $text_informations=get_field('member_informations');

    $stars=get_field('illustration_stars','option');
    $stars_half=get_field('stars_half','option');
    $glitters=get_field('illustration_glitters','option');

    $texts_home=get_field('blocs_home');
    $glitter_text=get_field('glitter_text','option');

?>
<html>

    <body class="wrap">
        <div class="header_2">
            <div>
                <div class="img-logo">
                    <img class="img"
                    src="<?php echo ($background['sizes']["background"]);?>" 
                    height="<?php echo ($background['sizes']["background-height"]);?>" 
                    width="<?php echo ($background['sizes']["background-width"]);?>" 
                    alt="<?php echo ($background['alt']);?>"
                    />

                </div>
                <div class="gradient"></div>
            </div>

            <div class="over">
                <div class="img_center">
                    <img class="logo"
                    src="<?php echo ($logo['sizes']["logo"]);?>" 
                    height="<?php echo ($logo['sizes']["logo-height"]);?>" 
                    width="<?php echo ($logo['sizes']["logo-width"]);?>" 
                    alt="<?php echo ($logo['alt']);?>"
                    />
                </div> 
                <h1 class="center"><?php echo($title) ?></h1>
                <h2 class="center"><?php echo($where) ?></h2>
                <div class="arrows">
                    <img src="<?php echo get_template_directory_uri() . '/illustration/fleche_or.svg';?>" 
                    height="80px" width="80px" alt="illustration flèche or"/>
                    <img class="arrow" src="<?php echo get_template_directory_uri() . '/illustration/fleche_blanche.svg';?>" 
                    height="80px" width="80px" alt="illustration fleche blanche"/>
                </div>
            </div>
             
        </div>

        <?php 
        if ($boolean) { ?>
            <div class="informations">
                <div class="flex">
                    <img class="logoI"
                        src="<?php echo ($informations['sizes']["logo_footer"]);?>" 
                        height="<?php echo ($informations['sizes']["logo_footer-height"]);?>" 
                        width="<?php echo ($informations['sizes']["logo_footer-width"]);?>" 
                        alt="<?php echo ($informations['alt']);?>"
                    />
                    <p class="text_info">Informations Adhérent</p>
                </div>
                <div>
                <?php if ($text_informations) {
                            foreach ($text_informations as $text) {
                                $infos = $text['info']; 
                        
                                if ($infos) {
                                    ?>
                                    <p class="text_info_p"><?php echo($infos) ?></p>
                                    <?php
                                }
                            }
                        }
        }
        ?>
            </div>
        </div>
        <div class="blocks">
            <img class="stars-right"
                src="<?php echo ($stars_half['sizes']["stars1"]);?>" 
                height="<?php echo ($stars_half['sizes']["stars1-height"]);?>" 
                width="<?php echo ($stars_half['sizes']["stars1-width"]);?>" 
                alt="<?php echo ($stars_half['alt']);?>"
            />

            <img class="stars-center"
                src="<?php echo ($stars['sizes']["stars2"]);?>" 
                height="<?php echo ($stars['sizes']["stars2-height"]);?>" 
                width="<?php echo ($stars['sizes']["stars2-width"]);?>" 
                alt="<?php echo ($stars['alt']);?>"
            />
            <?php
                if ($texts_home) {
                    foreach ($texts_home as $paragraph) {
                        $title = $paragraph['title_bloc']; 
                        $bloc = $paragraph['bloc_textarea']; 
                        $button = $paragraph['text_button']; 
            
                        ?>
                        <div class="column">
                                
                            <div>
                                <div class="title">
                                    <h2><?php echo($title);?></h2>
                                    <img class="glitters_texts"
                                        src="<?php echo ($glitter_text['sizes']["glitters_text"]);?>" 
                                        height="<?php echo ($glitter_text['sizes']["glitters_text-height"]);?>" 
                                        width="<?php echo ($glitter_text['sizes']["glitters_text-width"]);?>" 
                                        alt="<?php echo ($glitter_text['alt']);?>"/>
                                </div>
                                <p class="bloc"><?php echo($bloc);?></p>
                                 
                            </div>
                            
                        </div>

                    <?php
                    }
                }
            ?>

        </div>
    </body>

</html>
    
<?php

    get_footer();
?>

