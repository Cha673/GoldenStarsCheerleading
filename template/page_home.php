<?php
    /* Template Name: Accueil */

    //récupération des variables et des contenus sur Wordpress

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

        $title_training=get_field('title_training');
        $text_training=get_field('textaerea_training');

        

        $illustration_training=get_field('illustration_training');

        $calendar=get_field('calendar');


        $img1=get_field('img_home1');
        $img1_hover=get_field('img_home1_copy');
        $img2=get_field('img_home_2');
        $img2_hover=get_field('img_home_2_copy');
        $img3=get_field('img_home_3');
        $img3_hover=get_field('img_home_3_copy');
        $img4=get_field('img_home_4');
        $img4_hover=get_field('img_home_4_copy');

    // id de pages 
        $id_cheerleading=16;
        $id_club=12;
        $id_entrainement=18;
        $id_calendrier=24;
        $page_cheerleading = get_permalink($id_cheerleading);
        $page_club = get_permalink($id_club);
        $page_entrainement = get_permalink($id_entrainement);
        $page_calendrier = get_permalink($id_calendrier);


?>
<html>

    <body class="wrap">
<!----------------image en fond avec logo par dessus --------------------------------------------------------->
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

<!-------------------------------------div infos adhérents --------------------------------------------------->
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
<!--------------------------------------- étoiles illustrations fond -------------------------------------------->
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
<!-----------------------------------blocs de textes----------------------------------------------------------->
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
                                <div class="underline_button">
                                    <button class="underline">
                                        <div class="double_star"> 
                                            <img src="<?php echo get_template_directory_uri() . '/illustration/underline_button/double_star.svg';?>"> 
                                        </div>
                                        <div>
                                            <a href="' . $page_club . '"><?php echo($button) ;?></a>
                                            <div class="trait"> </div> 
                                        </div>
                                    </button>
                                </div>
                                 
                            </div>
                            
                        </div>

                    <?php
                    }
                }
            ?>

        </div>
<!----------------------------------------bloc texte entrainement---------------------------------------------->
        <div class="training">
            <img class="glitters"
                src="<?php echo ($glitters['sizes']["glitters"]);?>" 
                height="<?php echo ($glitters['sizes']["glitters-height"]);?>" 
                width="<?php echo ($glitters['sizes']["glitters-width"]);?>" 
                alt="<?php echo ($glitters['alt']);?>"
            />
            <div class="flex top90">
                <div class="column_50 white">
                    <h2><?php echo($title_training);?></h2>
                    <p><?php echo($text_training);?></p>
                    <div class="button_yellow button_discover"> 
                    <button> 
                        <a href="' . $page_entrainement . '"> 
                            <div class="stars star-container">
                                <div class="star4"> 
                                    <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_4n.svg';?>"> 
                                </div>
                                <div class="star3"> 
                                    <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_3n.svg';?>"> 
                                </div>
                            </div>
                            Découvrir
                        </a>
                    </button>
                    </div>
                </div>
                <div class="column_50">
                    <img class="training"
                        src="<?php echo ($illustration_training['sizes']["training"]);?>" 
                        height="<?php echo ($illustration_training['sizes']["training-height"]);?>" 
                        width="<?php echo ($illustration_training['sizes']["training-width"]);?>" 
                        alt="<?php echo ($illustration_training['alt']);?>"
                    />
                </div>
            </div>
        </div>

<!-------------------------------------------------Calendrier---------------------------------------------------->
        <div class="calendar horizontal_bar vertical_bar">
            <div class="flex">
                <img src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_blanche.png';?>">
                <p>PROCHAINS ÉVÉNEMENT</p>
            </div>
            <?php if ($calendar) {
                        foreach ($calendar as $event) {
                            $date = $event['date']; 
                            $title_event = $event['title_event']; 
                            $description = $event['textarea_event']; 

            ?>
            <div class="flex">
                <p><?php echo($date);?></p>
                <div class="encadre_association" onclick="toggleExpansion(this)">
                    <div class="contenu">
                        <p><?php echo($title_event);?></p>
                        <div class="arrow">
                            <img src="<?php echo get_template_directory_uri() . '/illustration/calendrier/arrow.svg' ?>" width="100%">
                        </div>
                    </div>
                    <div class="expansion">
                        <p><?php echo($description);?></p>
                    </div>
                </div>

            </div>
            <?php
            }}
            ?>

        </div>
<!---------------------------------------hover photo ---------------------------------------------------------->
        <div class="vertical">
            <div class="img1_size">
                <div class="img1"> 
                    <img 
                    src="<?php echo ($img1['sizes']["img_vertical_hover"]);?>" 
                    height="<?php echo ($img1['sizes']["img_vertical_hover-height"]);?>" 
                    width="<?php echo ($img1['sizes']["img_vertical_hover-width"]);?>" 
                    alt="<?php echo ($img1['alt']);?>"/>
                </div>
                <div class="img1_hover">
                    <img 
                    src="<?php echo ($img1_hover['sizes']["img_vertical_hover"]);?>" 
                    height="<?php echo ($img1_hover['sizes']["img_vertical_hover-height"]);?>" 
                    width="<?php echo ($img1_hover['sizes']["img_vertical_hover-width"]);?>" 
                    alt="<?php echo ($img1_hover['alt']);?>"/>
                </div>
            <div class="img2_size">
                <div class="img2">
                    <img 
                    src="<?php echo ($img2['sizes']["img_vertical_hover"]);?>" 
                    height="<?php echo ($img2['sizes']["img_vertical_hover-height"]);?>" 
                    width="<?php echo ($img2['sizes']["img_vertical_hover-width"]);?>" 
                    alt="<?php echo ($img2['alt']);?>"/>
                </div>
                <div class="img2_hover">
                <img 
                    src="<?php echo ($img2_hover['sizes']["img_vertical_hover"]);?>" 
                    height="<?php echo ($img2_hover['sizes']["img_vertical_hover-height"]);?>" 
                    width="<?php echo ($img2_hover['sizes']["img_vertical_hover-width"]);?>" 
                    alt="<?php echo ($img2_hover['alt']);?>"/>
                </div>
            </div>
        </div>
        <div class="horzontal">
            <div class="img3_size">
                <div class="img3">
                    <img 
                    src="<?php echo ($img3['sizes']["img_horizontal_hover"]);?>" 
                    height="<?php echo ($img3['sizes']["img_horizontal_hover-height"]);?>" 
                    width="<?php echo ($img3['sizes']["img_horizontal_hover-width"]);?>" 
                    alt="<?php echo ($img3['alt']);?>"/></div>
                <div class="img4_hover">
                <img 
                    src="<?php echo ($img3_hover['sizes']["img_horizontal_hover"]);?>" 
                    height="<?php echo ($img3_hover['sizes']["img_horizontal_hover-height"]);?>" 
                    width="<?php echo ($img3_hover['sizes']["img_horizontal_hover-width"]);?>" 
                    alt="<?php echo ($img3_hover['alt']);?>"/>
                </div>
            </div>
            <div class="img4_size">
                <div class="img4">
                <img 
                    src="<?php echo ($img4['sizes']["img_horizontal_hover"]);?>" 
                    height="<?php echo ($img4['sizes']["img_horizontal_hover-height"]);?>" 
                    width="<?php echo ($img4['sizes']["img_horizontal_hover-width"]);?>" 
                    alt="<?php echo ($img4['alt']);?>"/>
                </div>
                <div class="img4_hover">
                <img 
                    src="<?php echo ($img4_hover['sizes']["img_horizontal_hover"]);?>" 
                    height="<?php echo ($img4_hover['sizes']["img_horizontal_hover-height"]);?>" 
                    width="<?php echo ($img4_hover['sizes']["img_horizontal_hover-width"]);?>" 
                    alt="<?php echo ($img4_hover['alt']);?>"/>
                </div>
            </div>
        </div>
    </body>

</html>
    
<?php

    get_footer();
?>

