<?php
    /* Template Name: Association_equipe */

    get_header();

    $trainers=get_field('trainers');
    $juge=get_field('juge');
    $president=get_field('nom_president');
    $vice_president=get_field('vice-president');
    $tresorier=get_field('tresorier');
    $secretaire=get_field('secretaire');
    $vice_secretaire=get_field('vice-secretaire');
    $comm=get_field('responsable_site_communication');
    $social_media=get_field('responsable_socialmedia');
    $sponsor1=get_field('research_sponsors');
    $sponsor2=get_field('research_sponsor_animation');

?>
    <section class="wrap">
            <h1>L'EQIUPE</h1>
            <div class="paillettes_titre">
                <h2>Qui sont les coachs ?</h2>
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
                    $explication_event = $field['explication_event'];          
            ?>
                <div class="coach">
                    <div class="photo">
                        <img id="photo_coach" 
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
                            <div>
                                    <?php foreach ($trainers as $field) {
                                            $trainer=$field['img_trainer'];
                                            $name = $field['surname_first name']; 
                                            $age_trainer = $field['age']; 
                                            $explication_event = $field['explication_event'];    
                                    ?> 
                                         
                            </div>
                        </div>
                        <div class="citation">
                            <div class="p"><span class="guillemet">" </span>Mon objectif, c’est de réussir à extraire le maximum de nos athlètes, de leur faire
                                prendre conscience de leur incroyable potentiel, et pourquoi pas de décrocher un
                                titre de Champions de France ?<span class="guillemet"> "</span></div>
                        </div>
                    </div>
                </div>

            <?php }}?>

                <div class="coach">
                    <div class="explication_coach_droite">
                        <div class="nom_age_droite">
                            <h4>MELISSA SÉGARD</h4>
                            <div class="age">
                                <h4>25 ans</h4>
                            </div>
                        </div>
                        <div class="parcours">
                            <ul>
                                <li>2013 - Athlète au club des AIGLES de Chambéry</li>
                                <li>2018 - Championnat de France</li>
                                <li>2019 - Coach au club des AIGLES de l’équipe junior de Chambéry</li>
                                <li>2022 - Qualification de l’équipe junior des AIGLES au championnat de France et finit 5ème de France</li>
                                <li>2023 - <span id="bold">Coach des GOLDEN STARS</span> et du Stade Clermontois Cheerleading</li>
                            </ul>
                            <img id="ligne_coachs" src="elements_graphiques/ligne_coachs.png" title="ligne_coachs" alt="ligne_coachs">
                            <img id="megaphone" src="elements_graphiques/megaphone.svg" title="megaphone" alt="megaphone">
                        </div>
                        <div class="citation">
                            <div class="p"><span class="guillemet">" </span>Mon objectif, c’est de réussir à extraire le maximum de nos athlètes, de leur faire
                                prendre conscience de leur incroyable potentiel, et pourquoi pas de décrocher un
                                titre de Champions de France ?<span class="guillemet"> "</span></div>
                        </div>
                    </div>
                    <div class="photo">
                        <img id="photo_coach" src="equipe/coach_melissa.png" title="photo_coach" alt="photo_coach">
                    </div>
                </div>

            </div>
        </section>

        <div class="fond_blanc">
            <h2>Le bureau</h2>

            <div class="desktop_only">
                <div class="parent">
                    <div class="div1">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Le Président :</span></div>
                            <div class="p">Christophe COLAS</div>
                        </div>
                    </div>
                    <div class="div2">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">La Vice-présidente :</span></div>
                            <div class="p">Céline BERNAND</div>
                        </div>
                    </div>
                    <div class="div3">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">La trésorière :</span></div>
                            <div class="p">Angélique COLAS</div>
                        </div>
                    </div>
                    <div class="div4">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">La vice-trésorière :</span></div>
                            <div class="p">Alice LOIGEROT</div>
                        </div>
                    </div>
                    <div class="div5">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">La secrétaire :</span></div>
                            <div class="p">Vanessa NUNEZ</div>
                        </div>
                    </div>
                    <div class="div6">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">La vice-secrétaire :</span></div>
                            <div class="p">Alexandra SIBERT</div>
                        </div>
                    </div>
                    <div class="div7">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Responsable du site internet, communication et photos : </span><span class=text_centre>Laetitia SAINT-JUVIN</span></div>
                        </div>
                    </div>
                    <div class="div8">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Responsable des réseaux sociaux, photos et vidéos : </span><span class=text_centre>Léonie LOIGEROT</span></div>
                        </div>
                    </div>
                    <div class="div9">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Recherche de sponsors : </span></div>
                            <div class="p">Bruno CUNSOLO</div>
                        </div>
                    </div>
                    <div class="div10">
                        <div class="carre_jaune">
                            <div class="p"><span id="bold">Recherche de sponsor et animation : </span></div>
                            <div class="p">Aurélie GARIN</div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="carre_jaune_mobile mobile_only">
                    <div class="p">
                        <span id="bold">Le Président :<br></span>
                        Christophe COLAS<br><br>
                        <span id="bold">La vice-présidente :<br></span>
                        Celine BERNAND<br><br>
                        <span id="bold">La trésorière :<br></span>
                        Angélique COLAS<br><br>
                        <span id="bold">La vice-trésorière :<br></span>
                        Alice LOIGEROT<br><br>
                        <span id="bold">La secrétaire :<br></span>
                        Vanessa NUNEZ<br><br>
                        <span id="bold">La vice-secrétaire :<br></span>
                        Alexandra SIBERT<br><br>
                        <span id="bold">Responsable du site internet, communication et photos :<br></span>
                        Laetitia SAINT-JUVIN<br><br>
                        <span id="bold">Responsable des réseaux sociaux, photos et vidéos :<br></span>
                        Léonie LOIGEROT<br>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
?>