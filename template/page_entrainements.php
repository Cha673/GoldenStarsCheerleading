<?php
    /* Template Name: Entrainement */

    get_header();

    $text_age=get_field('texte_old');
    $level=get_field('level');
    $tarif=get_field('tarif');
    $tab_tarif=get_field('tab_tarif');
    $training_clothes=get_field('cloths_training');
    $baskets=get_field('infos_basket');
    $clothes_boys=get_field('clothes_boys');
    $other_clothes=get_field('other_clothes');
    $accessory=get_field('accessory');
    $clothes_girls=get_field('clothes_girls');
    $trainers=get_field('trainers');
    $gymnase=get_field('gymnase');
?>


<h1> LES ENTRAINEMENTS </h1>
<div class="niveaux"> 
    <h2> Les niveaux </h2>
    <div class="wrap center_title"><?php  echo($text_age)?></div>
    <div class="wrap">
    <div class="carte_niveau">
    <?php if ($level) {
                foreach ($level as $team) {
                    $name_team=$team['name_team'];
                    $categorie = $team['categorie']; 
                    $year_birth = $team['year_birth']; 
                    $surclassement = $team['surclassement'];            
            ?>
        <div class="carte_n">
            <p> ÉQUIPE </p>
            <h3> <?php  echo($name_team)?> </h3>
            <div class="categorie_niveau"> 
                <img src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_noir.png' ?>"> 
                <div> <?php  echo($categorie)?>  </div>
                <img src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_noir.png' ?>"> 
            </div>
            <div class="annee">
                <h4> Année de naissance </h4>
                <div> <?php  echo($year_birth)?> </div>
            </div>
            <div class="annee">
                <h4> Surclassement </h4>
                <div> <?php  echo($surclassement)?> </div>
            </div>
        </div>
        <?php }}?>
    </div>
    </div>
    <img class="paillettes" src="<?php echo get_template_directory_uri() . '/illustration/paillettes_fond.svg' ?>">

    <div class="button_white"> 
        <button> 
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> 
                <div class="stars star-container">
                    <div class="star4"> <img src="<?php echo get_template_directory_uri() . '/illustration/white_star_button/star_4j.svg'?>"> </div>
                    <div class="star3"> <img src="<?php echo get_template_directory_uri() . '/illustration/white_star_button/star_3j.svg'?>"> </div>
                </div>
                Je m'inscris
            </a>
        </button>
    </div>
    <div class="etoile_fond"> <img src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg' ?>"> </div> 
</div>



    <div class="tarifs">
    <div class="wrap"> <h2> <?php  echo($tarif)?></h2> </div>
        <div class="carte_tarif">
            <?php if ($tab_tarif) {
                foreach ($tab_tarif as $lign) {
                    $l_u=$lign['licence_ou_uniforme'];
                    $price = $lign['price'];  
                    $link_other_page=$lign['link_other_page'];
                    $link_page=$lign['link_page'];    
            ?>
            <div class="licence">
                <div class="carte_t"> 
                    <h3> <?php echo($l_u)?> </h3>
                    <p class="prix"> <?php echo($price)?></p>
                </div>
                    <div class="underline_button">
                        <?php if($link_other_page) { ?>
                        <button class="underline">
                            <div class="double_star"> 
                                <img src="<?php echo get_template_directory_uri() . '/illustration/underline_button/double_star.svg' ?>"> 
                            </div>
                            <div><a href="<?php  echo($link_page)?>"><?php echo($link_other_page)?></a>
                            <div class="trait"> </div> </div>
                        </button>
                        <?php } ?>
                    </div>
            </div>
            <?php }}?>

        <div class="silhouette">
            <img src="<?php echo get_template_directory_uri() . '/illustration/underline_button/silhouette_noire.png '?>" width="90%";>
        </div>
        </div> <!-- fin carte tarif-->
    </div> <!-- fin tarif-->

    <div class="tenue_entrainement">
        <div class="wrap">
            <div class="partie_droite">
                <h2> Les tenues d'entrainement </h2>
                <?php if ($training_clothes) {
                foreach ($training_clothes as $clothes) {
                    $preconisation=$clothes['preconisation'];      
                ?>
                <div class="demande">
                    <img src="<?php echo get_template_directory_uri() . '/illustration/main.png '?>"> 
                    <?php echo($preconisation)?>
                </div>
                <?php }}?>

                <div><?php  echo($baskets)?> </div>
            </div>
            <div class="partie_gauche">
                <div class="image_pgauche">
                    <img class="figure" src="<?php echo get_template_directory_uri() . '/illustration/entrainement/photo_entrainement.png'?> " width="100%">
                    <img class="chaussures" src="<?php echo get_template_directory_uri() . '/illustration/entrainement/photo_basket.png'?>" width="50%">
                </div>
                <img class="etoile_tenuep" src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg' ?>" width="10%">
                <img class="etoile_tenueg" src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg' ?>" width="25%">
            </div>
            <img class="etoile_tenueh" src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg' ?>" width="12%">
        </div>
    </div>

    <div class="tenue_entrainement">
        <div class="wrap">
            <div>
                <h2> L'uniforme </h2>
            <div class="clothes">
            <!-- $clothes_boys=get_field('clothes_boys');
    $other_clothes=get_field('other_clothes');
    $accessory=get_field('accessory');
    $clothes_girls -->
                    <div class="column">
                        <p>Filles</p>
                        <?php if($clothes_girls){
                            foreach($clothes_girls as $img_cloths_girl){
                                $tenues_filles=$img_cloths_girl['img_clothes_girl'];
                                ?>
                                <img  class="img_tenue" 
                                    src="<?php echo ($tenues_filles['sizes']["medium"]);?>" 
                                    height="<?php echo ($tenues_filles['sizes']["medium-height"]);?>" 
                                    width="<?php echo ($tenues_filles['sizes']["medium-width"]);?>" 
                                    alt="<?php echo ($tenues_filles['alt']);?>" 
                                title="image tenue filles" >
                        <?php }}?>
                    </div>
                    <div class="column">
                        <p>Garçons</p>
                        <?php if($clothes_boys){
                            foreach($clothes_boys as $img_cloths_boys){
                                $tenues_garcons=$img_cloths_boys['img_clothes_boys'];
                                ?>
                                <img  class="img_tenue" 
                                    src="<?php echo ($tenues_garcons['sizes']["medium"]);?>" 
                                    height="<?php echo ($tenues_garcons['sizes']["medium-height"]);?>" 
                                    width="<?php echo ($tenues_garcons['sizes']["medium-width"]);?>" 
                                    alt="<?php echo ($tenues_garcons['alt']);?>" 
                                title="image tenue garçons" >
                        <?php }}?>
                    </div>
                    <div class="column">
                    <?php if($accessory){
                            foreach($accessory as $img_other){
                                $text_img=$img_other['name_accessory'];
                                $img_accesory=$img_other['img_acessory'];
                                ?>
                        <div class="clothes_texte"><?php echo($text_img) ?></div>
                        <img  class="img_tenue" 
                            src="<?php echo ($img_accesory['sizes']["medium"]);?>" 
                            height="<?php echo ($img_accesory['sizes']["medium-height"]);?>" 
                            width="<?php echo ($img_accesory['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($img_accesory['alt']);?>" 
                        title="image tenue autres" >
                        <?php }}?>
                    </div>
            </div>
            </div>
        </div>
    </div>

    <div class="horaires_lieux">
        <h2> Horaires & lieux </h2>
        <div class="horaire">
            <?php if ($gymnase) {
                foreach ($gymnase as $where) {
                    $days=$where['days'];
                    $infos_gymnase=$where['infos_gymnase'];
                    $name_gymnase=$where['name_gymnase'];
                    $adress=$where['adress_gymnase'];
                    $ville_gymnase=$where['ville_gymnase'];
                    $link_maps=$where['link_maps'];      
            ?>
            <div class="encadre">
                <div class="date">
                <?php if ($days) {
                    foreach ($days as $day) {
                        $jour=$day['day'];
                        $hours=$day['hours'];    
                ?>
                    <div class="jour_heure"> 
                        <div class="day_training"> <?php  echo($jour)?></div>
                        <div> <?php  echo($hours)?></div>
                    </div>
                <?php }}?>
                </div>
                <div class="lieu">
                    <div class="gymnase">
                        <div class="complexe"><?php echo($infos_gymnase)?></div>
                        <h3> <?php echo($name_gymnase)?></h3>
                        <div> <?php echo($adress)?> </div>
                        <div class="button_white"> 
                            <button> 
                                <a href="<?php  echo($link_maps)?>" target="_blank"> 
                                    <div class="stars star-container">
                                        <div class="star4"> <img src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_noir.png'?>"> </div>
                                        <div class="star3"> <img src="<?php echo get_template_directory_uri() . '/illustration/petite_etoile_noir.png'?>"> </div>
                                    </div>
                                    S'y rendre
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }}?>
        </div>
        <p> <a href=""> Regardez les "informations adhérents" pour des informations sur les entrainements au fil de la saison </a></p>
        <img class="silhouette_horaire" src="<?php echo get_template_directory_uri() . '/illustration/silhouette_jaune.png'?>">
    </div>
</div>

<?php
get_footer();
?>