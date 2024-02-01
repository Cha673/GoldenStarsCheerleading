<?php
    /* Template Name: Calendrier */

    get_header();

    $goal=get_field('goal');
    $near_event=get_field('near_events');
    $past_event=get_field('past_events');

?>
 <h1>CALENDRIER</h1>
    
    <section class="wrap">
        <img src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg' ?>" id="etoile_fond1">
        <img src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg' ?>" id="etoile_fond2">

        <div class="titre_objectifs">
            <h2>Nos objectifs</h2>
            <img src="<?php echo get_template_directory_uri() . '/illustration/paillettes_ligne_titre.png' ?>" id="ligne_paillettes1">
        </div>

        <div class="objectifs">
            <img src="<?php echo get_template_directory_uri() . '/illustration/coupe.png' ?>" class="coupe">
            <div class="p goal">
                <?php  echo($goal);?>
            </div>
        </div>
    
        <div class="titre_partie_legende">
            <h2>Nos événements</h2>
            <img src="<?php echo get_template_directory_uri() . '/illustration/paillettes_ligne_titre.png' ?>" id="ligne_paillettes2">
        </div>

        <div class="legende">
            <div class="p" id="titre_legende">LÉGENDE :</div>
            <div class="description_legende">
                <div id="case_blanche"></div>
                <div class="p">Association</div>
                <div id="case_jaune"></div>
                <div class="p" id="sport">Sport</div>
            </div>
        </div>

        <div class="evenements">
            <img src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_blanche.png' ?>">
            <h4>Prochains événements</h4>
        </div>
        <?php if ($near_event) {
                foreach ($near_event as $near) {
                    $select=$near['calendrier'];
                    $date = $near['date']; 
                    $title_event = $near['title_events']; 
                    $description = $near['explication_event'];          
            ?>
            <div class="calendar flex ">
                <p class="event"><?php echo($date);?></p>
                <div class="calendar_content type_<?php echo($select) ?>">
                    <div class="contenu">
                        <p><?php echo($title_event);?></p>
                        <div >
                            <img class="arrow" src="<?php echo get_template_directory_uri() . '/illustration/calendrier/arrow.svg' ?>" width="100%">
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

        <div class="evenements">
            <img src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_blanche.png' ?>">
            <h4>Événements passés</h4>
        </div>
        <?php if ($past_event) {
                foreach ($past_event as $past) {
                    $select_past=$past['select'];
                    $date_past = $past['date_past']; 
                    $title_events = $past['title_event_past']; 
                    $bloc_event = $past['bloc_event_past'];
                    $link_image = $past['link_photo'];            
            ?>
            <div class="calendar flex ">
                <p class="event"><?php echo($date_past);?></p>
                <div class="calendar_content type_<?php echo($select_past) ?>">
                    <div class="contenu">
                        <p><?php echo($title_events);?></p>
                        <div >
                            <img class="arrow" src="<?php echo get_template_directory_uri() . '/illustration/calendrier/arrow.svg' ?>" width="100%">
                        </div>
                    </div>
                    <div class="expansion">
                        <p><?php echo($bloc_event);?>
                        <a href=<?php echo $link_image; ?>>Voir les images</a>
                        </p>
                       
                    </div>
                </div>

            </div>
            <?php
            }}
            ?>

    </section>

<?php
get_footer();
?>