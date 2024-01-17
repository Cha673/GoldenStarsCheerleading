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



?>
<section class="wrap qui_sommes_nous ">
    <h1>qui sommes-nous ?</h1>
    <p class="chapo"><?php echo($WH)?></p>
</section>

<section class="blanc qui_sommes_nous">
    <p><?php echo($introduction)?></p>

    <div class="club">
        <img src="gsc_pompon.png" id="gsc"/>
        <div class="texte_club">
            <p><?php echo($name_team)?></p>
            <p><?php echo($color)?></p>
        </div>
    </div>
</section>

<section class="wrap qui_sommes_nous">
    <img src="<?php echo get_template_directory_uri() . '/illustration/underline_button/double_star.svg';?>" id="paillettes">
    <p><?php echo($text_values)?></p>

    <div class="valeurs">
    <?php foreach ($values as $text) {
                            $title = $text['name_value']; 
                            $bloc = $text['textarea_explication_values']; 
                
                            ?>
                <div>
                    <h2><?php echo($title)?></h2>
                    <p>
                    <?php echo($bloc)?>
                    </p>
                </div>
        <?php } ?> 
    </div>

    <div class="underline_button">
        <button class="underline">
            <div class="double_star"> <img src="<?php echo($link_media)?>"> </div>
            <div><p> Voir les dernières photos et vidéos du club </p>
            <div class="trait"> </div> </div>
        </button>
    </div>
    </div>
</section>


<?php
get_footer();
?>