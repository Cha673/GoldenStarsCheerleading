<?php 

/* Template Name: Footer */

    //logo des partenaires
    $logo_partner=get_field('logo_partner','option');

    //Contact
    $mail=get_field('mail','option');
    $tel=get_field('tel','option');
    $adress=get_field('adress','option');
    $logo=get_field('logo','option');

    //nom crédit photo
    $credit_1=get_field("photo1",'option');
    $credit_2=get_field("photo2",'option');
    $link_photo1=get_field("link_creditphoto",'option');
    $link_photo2=get_field("link_creditphoto2",'option');

    //lien vers réseaux
    $social_media=get_field("social_media",'option');

    // echo("<pre>");
    // var_dump($logo_partner);
    // echo('</pre>');
    
?>

<footer>
    <div class="flex center margin_bottom">
        <p class="partner">Nos partenaires : </p>
            <?php
            if ($logo_partner) {
                foreach ($logo_partner as $item) {
                    $image = $item['logo']; 
                    $lien = $item['link_partner']; 
            
                    if ($image && $lien) {
                        ?>
                        <a href="<?php echo esc_url($lien); ?>">
                            <img class="partner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </a>
                        <?php
                    }
                    else {
                        ?>
                        <img class="partner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php
                    }
                }
            }
            ?>
    </div> 

    <hr> 

    <div class="flex space_between margin_side">
        <div class="space_between width_column">
            <p class="text_contact center bottom">Contactez-nous :</p>
            <p class="center bottom"><?php echo($mail); ?></p>
            <p class="center bottom"><?php echo($tel); ?></p>
            <p class="center bottom top"><?php echo($adress); ?></p>
        </div>
        <div class=" center width_column">
            <img class="logo align_center"
                        src="<?php echo ($logo['sizes']["logo_footer"]);?>" 
                        height="<?php echo ($logo['sizes']["logo_footer-height"]);?>" 
                        width="<?php echo ($logo['sizes']["logo_footer-width"]);?>" 
                        alt="<?php echo ($logo['alt']);?>"
            />
            <div>
                <?php
                    if ($social_media) {
                        foreach ($social_media as $media) {
                            $logo = $media['logo_media']; 
                            $link = $media['logo_link']; 
                    
                            if ($logo && $link) {
                                ?>
                                <a href="<?php echo esc_url($link); ?>">
                                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                                </a>
                                <?php
                            }
                            else {
                                ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                                <?php
                            }
                        }
                    }
                ?>
            </div>
        </div>
        <div class="width_column margin_left"> 
            <?php
             wp_nav_menu('footer');
             ?>
        </div>

    </div>
    <div class="bottom_footer flex space_between margin_side margin_top margin_bottom">
        <div class="inline " >
            <p>Crédits photos  : 
            <a class="text-underline" href="<?php echo($link_photo1)?>"><?php echo($credit_1) ;?></a>
             , 
            <a  class="text-underline" href="<?php echo($link_photo2)?>"><?php echo($credit_2) ;?></a>
            </p>
        </div>
        <div>
            <p>Mentions Légales</p>
        </div>
    </div>

</footer>
    <?php wp_footer(); ?>
</body>
</html>
