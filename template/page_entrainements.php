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
    <div class="wrap"><p> Nous accueillons les jeunes à partir de 10 ans ! </p></div>
    <div class="wrap">
    <div class="carte_niveau">
        <div class="carte_n">
            <p> ÉQUIPE </p>
            <h3> ÉLECTRA </h3>
            <div class="categorie_niveau"> 
                <img src="img/elements_graphiques/petite_etoile_noire.svg"> 
                <p> Cadet </p>
                <img src="img/elements_graphiques/petite_etoile_noire.svg"> 
            </div>
            <div class="annee">
                <h4> Année de naissance </h4>
                <p> 2010 - 2011 - 2012 </p>
            </div>
            <div class="annee">
                <h4> Surclassement </h4>
                <p> 2013 </p>
            </div>
        </div>

        <div class="carte_n">
            <p> ÉQUIPE </p>
            <h3> ÉLECTRA </h3>
            <div class="categorie_niveau"> 
                <img src="img/elements_graphiques/petite_etoile_noire.svg"> 
                <p> Cadet </p>
                <img src="img/elements_graphiques/petite_etoile_noire.svg"> 
            </div>
            <div class="annee">
                <h4> Année de naissance </h4>
                <p> 2010 - 2011 - 2012 - 2013</p>
            </div>
            <div class="annee">
                <h4> Surclassement </h4>
                <p> 2013 </p>
            </div>
        </div>

        <div class="carte_n">
            <p> ÉQUIPE </p>
            <h3> ÉLECTRA </h3>
            <div class="categorie_niveau"> 
                <img src="img/elements_graphiques/petite_etoile_noire.svg"> 
                <p> Cadet </p>
                <img src="img/elements_graphiques/petite_etoile_noire.svg"> 
            </div>
            <div class="annee">
                <h4> Année de naissance </h4>
                <p> 2010 - 2011 - 2012 - 2013</p>
            </div>
            <div class="annee">
                <h4> Surclassement </h4>
                <p> 2013 </p>
            </div>
        </div>
    </div>
    </div>
    <img class="paillettes" src="img/elements_graphiques/paillettes_fond.svg">

    <div class="button_white"> 
        <button> 
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> 
                <div class="stars star-container">
                    <div class="star4"> <img src="img/white_star_button/star_4j.svg"> </div>
                    <div class="star3"> <img src="img/white_star_button/star_3j.svg"> </div>
                </div>
                Je m'inscris
            </a>
        </button>
    </div>
    <div class="etoile_fond"> <img src="img/elements_graphiques/grande_etoile_fond.svg"> </div> 
</div>



    <div class="tarifs">
    <div class="wrap"> <h2> Tarifs 2023-2024</h2> </div>
        <div class="carte_tarif">
            <div class="licence">
                <div class="carte_t"> 
                    <h3> Licence + Assurance </h3>
                    <p class="prix"> 170€</p>
                </div>
                <div class="underline_button">
                    <button class="underline">
                        <div class="double_star"> <img src="img/underline_button/double_star.svg"> </div>
                        <div><p> Télécharger les documents </p>
                        <div class="trait"> </div> </div>
                    </button>
                </div>
            </div>

            <div class="uniforme">
                <div class="carte_t"> 
                    <h3> Uniforme </h3>
                    <p class="prix"> 180€</p>
                </div>
                <div class="underline_button desktop_only" id="openPopup">
                    <button class="underline">
                        <div class="double_star"> <img src="img/underline_button/double_star.svg"> </div>
                        <div><p> Voir les uniformes </p>
                        <div class="trait"> </div> </div>
                    </button>
                </div>
                <div class="underline_button mobile_only" >
                    <button class="underline">
                        <a href="https://photos.app.goo.gl/NsMSVdZEnfinYaFA8" target="_blank">
                            <div class="double_star"> <img src="img/underline_button/double_star.svg"> </div>
                            <div><p> Découvrir les uniformes </p>
                            <div class="trait"> </div> </div>
                        </a>
                    </button>
                </div>

            <div id="popupContainer" class="popup">
                <div class="popupContent">
                    <span class="closeButton" onclick="closePopup()">&#10006;</span>
                    <h3 class="titre_popup">La tenue de démonstration</h3>
                    <div class="categories_popup">
                        <div> 
                            <h4 class="categorie"> Fille </h4>
                            <div class="img_uniforme_femme"> 
                                <img src="img/popup_entrainement/fille_face.png" width="100%">
                                <img src="img/popup_entrainement/fille_dos.png" width="100%">
                            </div>
                        </div>
                        <div class="other"> 
                            <h4 class="categorie"> Garçon </h4> 
                            <div class="img_uniforme">
                                    <img src="img/popup_entrainement/garçon_face.png" width="60%">
                                    <img src="img/popup_entrainement/garçon_bas.png" width="30%">
                            </div>
                        </div>
                        <div class="other"> 
                            <h4 class="categorie"> Jersey </h4> 
                            <div class="img_uniforme">
                                <a href="https://www.instagram.com/dazzle_athletics/" target="_blank"> <img src="img/popup_entrainement/jersey.png" width="98%"></a>
                            </div>
                        </div>
                        <div class="other"> 
                            <h4 class="categorie"> Ruban </h4> 
                            <div class="img_uniforme">
                                <img src="img/popup_entrainement/bow.png" width="80%">
                            </div>
                            <p> Ruban non compris dans les 180€</p>
                        </div> <!-- fin other-->
                    </div> <!-- fin categories_popup-->
                    <div class="button_white"> 
                        <button> 
                            <a href="https://photos.app.goo.gl/NsMSVdZEnfinYaFA8" target="_blank"> 
                                <div class="stars star-container">
                                    <div class="star4"> <img src="img/yellow_button/star_4n.svg"> </div>
                                    <div class="star3"> <img src="img/yellow_button/star_3n.svg"> </div>
                                </div>
                                Découvrir toutes les photos
                            </a>
                        </button>
                    </div>
                    <img class="etoile_popupg" src="img/elements_graphiques/grande_etoile_fond.svg" width="10%">
                    <img class="etoile_popupp" src="img/elements_graphiques/grande_etoile_fond.svg" width="5%">
                    <img class="etoile_popuph" src="img/elements_graphiques/grande_etoile_fond.svg" width="7%">

                </div> <!-- fin popupContent-->
            </div> <!-- fin popupContainer-->
        </div> <!-- fin uniforme-->
        <div class="silhouette">
            <img src="img/elements_graphiques/silhouette_noire.png" width="90%";>
        </div>
        </div> <!-- fin carte tarif-->
    </div> <!-- fin tarif-->

    <div class="tenue_entrainement">
        <div class="wrap">
            <div class="partie_droite">
                <h2> Les tenues d'entrainement </h2>
                <div class="demande">
                    <img src="img/elements_graphiques/main.png"> 
                    <p> tenueeeeeeeeeeeeeee123456789123456789 </p> 
                </div>
                <div class="demande">
                    <img src="img/elements_graphiques/main.png"> 
                    <p> tenue </p> 
                </div>
                <div class="demande">
                    <img src="img/elements_graphiques/main.png"> 
                    <p> tenue </p> 
                </div>
                <div class="demande">
                    <img src="img/elements_graphiques/main.png"> 
                    <p> tenue </p> 
                </div>
                <div class="demande">
                    <img src="img/elements_graphiques/main.png"> 
                    <p> tenue </p> 
                </div>
                <div class="demande">
                    <img src="img/elements_graphiques/main.png"> 
                    <p> tenue </p> 
                </div>
                <p> À acheter : Baskets blanches d’intérieur à lacets et semelle fine </p>
            </div>
            <div class="partie_gauche">
                <div class="image_pgauche">
                    <img class="figure" src="img/entrainement/photo_entrainement.png" width="100%">
                    <img class="chaussures" src="img/entrainement/photo_basket.png" width="50%">
                </div>
                <img class="etoile_tenuep" src="img/elements_graphiques/grande_etoile_fond.svg" width="10%">
                <img class="etoile_tenueg" src="img/elements_graphiques/grande_etoile_fond.svg" width="25%">
            </div>
            <img class="etoile_tenueh" src="img/elements_graphiques/grande_etoile_fond.svg" width="12%">
        </div>
    </div>

    <div class="horaires_lieux">
        <h2> Horaires & lieux </h2>
        
        <div class="horaire">
            <div class="encadre">
                <div class="date">
                    <div class="jour_heure"> 
                        <p> Jeudi</p>
                        <p> De 18 h 30 à 20 h 30</p> 
                    </div>
                    <div class="jour_heure"> 
                        <p> Vendredi</p>
                        <p> De 18 h à 20 h </p> 
                    </div>
                </div>
                <div class="lieu">
                    <div class="gymnase">
                        <p class="complexe"> COMPLEXE BOUTRON </p>
                        <h3> GYMNASE BENOIT CHAMOUX </h3>
                        <p> 31 rue du Grand Champs </p>
                        <p> 73000 Chambéry </p>
                        <div class="button_white"> 
                            <button> 
                                <a href="https://maps.app.goo.gl/ctfGuVZ5NKZCqn9r6" target="_blank"> 
                                    <div class="stars star-container">
                                        <div class="star4"> <img src="img/white_star_button/star_4j.svg"> </div>
                                        <div class="star3"> <img src="img/white_star_button/star_3j.svg"> </div>
                                    </div>
                                    S'y rendre
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="encadre">
                <div class="date">
                    <div class="jour_heure"> 
                        <p> Certains dimanches de l'année</p>
                        <p> Horaires variables </p> 
                    </div>
                </div>
                <div class="lieu">
                    <div class="gymnase">
                        <h3> GYMNASE LA PALESTRE </h3>
                        <p> 2 square Jacques Lapeyre </p>
                        <p> 73000 Chambéry </p>
                        <div class="button_white"> 
                            <button> 
                                <a href="https://maps.app.goo.gl/FayMMm2zcuVeTn3V7" target="_blank"> 
                                    <div class="stars star-container">
                                        <div class="star4"> <img src="img/white_star_button/star_4j.svg"> </div>
                                        <div class="star3"> <img src="img/white_star_button/star_3j.svg"> </div>
                                    </div>
                                    S'y rendre
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p> <a href=""> Regardez les "informations adhérents" pour des informations sur les entrainements au fil de la saison </a></p>
        <img class="silhouette_horaire" src="img/elements_graphiques/silhouette_jaune.png">
    </div>
</div>

<?php
get_footer();
?>