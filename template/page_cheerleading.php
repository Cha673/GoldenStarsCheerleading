<?php
    /* Template Name: Cheerleading */

    get_header();

    $heading=get_field('content_heading');
    $history=get_field('history_cheerleading');
    $role=get_field('role');
    $explication=get_field('explication');
    $dictionnary=get_field('dictionnary');
    $img_history=get_field('img_next_history');
    $img_competition=get_field('img_next_competition');


?>
    <section class="wrap cheerleading">
            <h1>LE CHEERLEADING</h1>
            <div class="chapo">
                <?php echo($heading)?>
            </div>

            <div class="histoire">
                <div class="histoire_text_photo">
                    <div class="text_histoire">
                        <h2>L'HISTOIRE</h2>
                        <div class="fond_noir">
                            <div class="marges_text text_cheerleading">
                                <?php echo($history) ;?>
                            </div>
                        </div>
                    </div>
                    <div class="photo_histoire text_cheerleading">
                        <img class="cheerleading1" 
                        src="<?php echo ($img_history['sizes']["medium"]);?>" 
                        height="<?php echo ($img_history['sizes']["medium-height"]);?>" 
                        width="<?php echo ($img_history['sizes']["medium-width"]);?>" 
                        alt="<?php echo ($img_history['alt']);?>"
                        title="cheerleading_histoire" />
                    </div>
                </div>

                <img class="etoile_fond1" 
                src=" <?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg';?>" 
                title="etoile_fond" 
                alt="etoile_fond">
                <img class="etoile_fond2" 
                src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg';?>" 
                title="etoile_fond" alt="etoile_fond">
            </div>
            </section>
        
        
            <div class="fond_blanc">
                <div class="roles">
                        <h2>LES ROLES</h2>
                        <div class="explications">
                            <div class="text_cheerleading2"><?php echo ($role);?>
                            </div>
                        </div>
                </div>
            </div>

        <section class="wrap">
            <div class="competition">
                <div class="competition_text_photo">
                    <div class="photo_compet">
                        <img class="cheerleading2" 
                        src="<?php echo ($img_competition['sizes']["medium"]);?>" 
                        height="<?php echo ($img_competition['sizes']["medium-height"]);?>" 
                        width="<?php echo ($img_competition['sizes']["medium-width"]);?>" 
                        alt="<?php echo ($img_competition['alt']);?>"
                        title="cheerleading_competition"/> 
                    </div>
                    <div class="text_compet">
                        <h2>LA COMPETITION</h2>
                        <div class="fond_noir">
                            <div class="text_cheerleading"><?php echo($explication)?></div>
                                <div class="underline_button">
                                    <button class="underline">
                                        <div class="double_star">
                                        <img src="<?php echo get_template_directory_uri() . '/illustration/underline_button/double_star.svg';?>">
                                        </div>
                                        <div>
                                            <div> Le lexique du cheerleading </p>
                                            <div class="trait"> </div> 
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

<?php
get_footer();
?>