<?php
    /* Template Name: Qui_sommes_nous */

    get_header();

    $WH=get_field('when_where');
    $introduction=get_field('introduction_team');
    $name_team=get_field('name_team');
    $color=get_field('explication_color');
    $text_values=get_field('text_values');
    $values=get_field('values');
    $link_media=get_field('link_media');
    $img_GSC=get_field('img_GSC');

    $glitters=get_field('illustration_glitters','option');



?>
<section class="wrap qui_sommes_nous ">
    <h1>QUI-SOMMES-NOUS ?</h1>
    <div class="chapo "><?php echo($WH); ?></div>
</section>

<section class="blanc qui_sommes_nous">
    <div class="p"><?php echo($introduction)?></div>

    <div class="club">
        <img class="gsc" 
        src="<?php echo ($img_GSC['sizes']["GSC_pompon"]);?>" 
        height="<?php echo ($img_GSC['sizes']["GSC_pompon-height"]);?>" 
        width="<?php echo ($img_GSC['sizes']["GSC_pompon-width"]);?>" 
        alt="<?php echo ($img_GSC['alt']);?>"/>

        <div class="texte_club">
            <div class="p" ><?php echo($name_team)?></div>
            <div class="p margin5top" ><?php echo($color)?></div>
        </div>
    </div>
</section>

<section class="wrap qui_sommes_nous">
    <img src="<?php echo get_template_directory_uri() . '/illustration/paillettes_fond.svg';?>" id="paillettes">
    <div class="p margin5top p_white" ><?php echo($text_values)?></div>

    <div class="valeurs">
    <?php foreach ($values as $text) {
                            $title = $text['name_value']; 
                            $bloc = $text['textarea_explication_values']; 
                
                            ?>
                <div class="value">
                        <h2 class="h2_qui_sommes_nous"><?php echo($title)?></h2>
                        <div class="p"> 
                            <?php echo($bloc)?>
                        </div>
                </div>
        <?php } ?> 
    </div>

    <div class="underline_button">
        <button class="underline">
            <div class="double_star"> 
                <img src="<?php echo get_template_directory_uri() . '/illustration/underline_button/double_star.svg';?>"> </div>
            <div><p> Voir les dernières photos et vidéos du club </p>
            <div class="trait"> </div> </div>
        </button>
    </div>
    </div>
</section>


<?php
get_footer();
?>