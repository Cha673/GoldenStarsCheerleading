<?php
    /* Template Name: Association_equipe */

    get_header();

    $trainers=get_field('trainers');
    $juge=get_field('juge');
    $president=get_field('nom_president');
    $vice_president=get_field('vice-president');
    $tresorier=get_field('tresorier');
    $vice_tresorier=get_field('vice_tresorier');
    $secretaire=get_field('secretaire');
    $vice_secretaire=get_field('vice-secretaire');
    $comm=get_field('responsable_site_communication');
    $social_media=get_field('responsable_socialmedia');
    $sponsor1=get_field('research_sponsors');
    $sponsor2=get_field('research_sponsor_animation');

?>
    <section class="wrap">
            <h1>L'EQUIPE</h1>
            <!-- partis coachs -->
            <div class="paillettes_titre">
                <h2 class="margins_title">Qui sont les coachs ?</h2>
                <img id="ligne_paillettes" 
                src="<?php echo get_template_directory_uri() . '/illustration/paillettes_ligne_titre.png' ?>" 
                title="paillettes_ligne" >
                </div>
            <div class="fond_noir">
            <?php if ($trainers) {
                foreach ($trainers as $field) {
                    $trainer=$field['img_trainer'];
                    $name = $field['surname_first name']; 
                    $age_trainer = $field['age']; 
                    $explication_event = $field['action'];
                    $citation = $field['citation'];             
            ?>
                <div class="coach">
                    <div class="photo">
                        <img class="photo_coach" 
                            src="<?php echo ($trainer['sizes']["medium"]);?>" 
                            height="<?php echo ($trainer['sizes']["medium-height"]);?>" 
                            width="<?php echo ($trainer['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($trainer['alt']);?>" 
                        title="photo_coach" >
                    </div>
                    <div class="explication_coach">
                        <div class="nom_age">
                            <h4><?php echo($name);?></h4>
                            <div class="age">
                                <h4><?php echo($age_trainer);?></h4>
                            </div>
                        </div>
                        <div class="parcours">
                            <img id="megaphone" 
                            src="<?php echo get_template_directory_uri() . '/illustration/megaphone.svg' ?>" 
                            title="megaphone">
                            <img id="ligne_coachs" 
                            src="<?php echo get_template_directory_uri() . '/illustration/ligne_coachs.png' ?>" 
                            title="ligne_coachs">
                            <ul>
                                <?php foreach ($explication_event as $year) {
                                        $action_year=$year['action_year'];  
                                ?> 
                                <div>
                                <li><?php echo($action_year);?>
                        <?php  }?>
                                </div>
                                </div>
                        <div class="citation">
                            <div class="p"><span class="guillemet">"</span> <?php echo($citation)?> <span class="guillemet">"</span></div>
                        </div>

                    </div>

                    </div>
            <?php }}?>
            </div>
            <!-- partie juge -->
            <div class="paillettes_titre">
                <h2 class="margins_title">Qui sont les juges ?</h2>
                <img id="ligne_paillettes" 
                src="<?php echo get_template_directory_uri() . '/illustration/paillettes_ligne_titre.png' ?>" 
                title="paillettes_ligne" >
                </div>
            <div class="fond_noir">
            <?php if ($juge) {
                foreach ($juge as $people) {
                    $juge=$people['img_juge'];
                    $name_juge = $people['surname_first_name']; 
                    $age_juge = $people['age']; 
                    $explication_event_juge = $people['action'];
                    $citation_juge = $people['citation'];             
            ?>
                <div class="juge">
                    
                    <div class="explication_coach_droite">
                        <div class="nom_age_droite">
                            <h4><?php echo($name_juge);?></h4>
                            <div class="age">
                                <h4><?php echo($age_juge);?></h4>
                            </div>
                        </div>
                        <div class="parcours_droite">
                            <ul>
                                <?php foreach ($explication_event_juge as $thing) {
                                        $action_year_juge=$thing['action_year'];  
                                ?> 
                            
                                <li><?php echo($action_year_juge);?>
                                <?php  }?>   
                            </ul>                    
                            <img id="ligne_coachs" 
                            src="<?php echo get_template_directory_uri() . '/illustration/ligne_coachs.png' ?>" 
                            title="ligne_coachs">
                            <img id="megaphone" 
                            src="<?php echo get_template_directory_uri() . '/illustration/megaphone.svg' ?>" 
                            title="megaphone">
                        </div>
                        <div class="citation">
                            <div class="p"><span class="guillemet">"</span> <?php echo($citation_juge)?> <span class="guillemet">"</span></div>
                        </div>

                    </div>
                    <div class="photo">
                        <img  class="photo_juge" 
                            src="<?php echo ($juge['sizes']["medium"]);?>" 
                            height="<?php echo ($juge['sizes']["medium-height"]);?>" 
                            width="<?php echo ($juge['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($juge['alt']);?>" 
                        title="photo_coach" >
                    </div>

                    </div>
            <?php }}?>
            </div>
        </section>

        <div class="fond_blanc">
            <h2>Le bureau</h2>

            <div class="desktop_only">
                <div class="parent">
                    <div class="div1">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Président.e :</span></div>
                            <div class="p"><?php echo($president) ?></div>
                        </div>
                    </div>
                    <div class="div2">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Vice-président.e :</span></div>
                            <div class="p"><?php echo($vice_president) ?></div>
                        </div>
                    </div>
                    <div class="div3">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Trésorièr.e :</span></div>
                            <div class="p"><?php echo($tresorier) ?></div>
                        </div>
                    </div>
                    <div class="div4">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Vice-trésorièr.e :</span></div>
                            <div class="p"><?php echo($vice_tresorier) ?></div>
                        </div>
                    </div>
                    <div class="div5">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Secrétaire :</span></div>
                            <div class="p"><?php echo($secretaire) ?></div>
                        </div>
                    </div>
                    <div class="div6">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Vice-secrétaire :</span></div>
                            <div class="p"><?php echo($vice_secretaire) ?></div>
                        </div>
                    </div>
                    <div class="div7">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Responsable du site internet, communication et photos : </span></div>
                            <div class=text_centre class="p"><?php echo($comm) ?></div>
                        </div>
                    </div>
                    <div class="div8">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Responsable des réseaux sociaux, photos et vidéos : </div>
                            <div class="p"><?php echo($social_media) ?></div>
                        </div>
                    </div>
                    <div class="div9">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Recherche de sponsors : </span></div>
                            <div class="p"><?php echo($sponsor1) ?></div>
                        </div>
                    </div>
                    <div class="div10">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Recherche de sponsor et animation : </span></div>
                            <div class="p"><?php echo($sponsor2) ?></div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="carre_jaune_mobile mobile_only">
                    <div class="p">
                        <span id="bold">Président.e :<br></span>
                        <?php echo($president) ?><br><br>
                        <span id="bold">Vice-président.e :<br></span>
                        <?php echo($vice_president) ?><br><br>
                        <span id="bold">Trésorièr.e :<br></span>
                        <?php echo($tresorier) ?><br><br>
                        <span id="bold">Vice-trésorièr.e :<br></span>
                        <?php echo($vice_tresorier) ?><br><br>
                        <span id="bold">Secrétaire :<br></span>
                        <?php echo($secretaire) ?><br><br>
                        <span id="bold">Vice-secrétaire :<br></span>
                        <?php echo($vice_secretaire) ?><br><br>
                        <span id="bold">Responsable du site internet, communication et photos :<br></span>
                        <?php echo($comm) ?><br><br>
                        <span id="bold">Responsable des réseaux sociaux, photos et vidéos :<br></span>
                        <?php echo($social_media) ?><br>
                        <span id="bold">Recherche de sponsors :<br></span>
                        <?php echo($sponsor1) ?><br>
                        <span id="bold">Recherche de sponsor et animation : <br></span>
                        <?php echo($sponsor2) ?><br>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
?>