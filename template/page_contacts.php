<?php
    /* Template Name: Contacts */

    get_header();
    $logo_insta=get_field('logo_instagram');
    $link_insta=get_field('link_instagram');
    $logo_facebook=get_field('logo_facebook');
    $link_facebook=get_field('link_facebook');
    $logo_tiktok=get_field('logo_tiktok');
    $link_tiktok=get_field('link_tiktok');
    $logo_insta=get_field('logo_instagram');
    $name_club=get_field('name_club');
    $mail_club=get_field('mail_club');
    $adress_club=get_field('adress_club');
    $num_rna=get_field('num_rna');
    $num_siret=get_field('num_siret');
    $name_president=get_field('name_president');
    $num_president=get_field('num_president');
    $adress_president=get_field('adresse_president');
?>
    <section class="wrap">
        <h1>contact</h1>
    </section>
    
    <img src="Photos/grande_etoile_fond.svg" class="etoile_fond">
    <section class="blanc">
        <h2>Réseaux sociaux</h2>
        <div class="reseaux">
            <div class="instagram">
                <div class="button_yellow" id="bouton_reseaux">
                <button> 
                    <a href="https://www.instagram.com/goldenstars_cheer/"> 
                        <div class="stars star-container">
                            <div class="star4"> <img src="img/yellow_button/star_4n.svg"> </div>
                            <div class="star3"> <img src="img/yellow_button/star_3n.svg"> </div>
                        </div>
                        <img src="photos/contact/instagram.svg" class="logo_reseaux"/>
                    </a>
                </button>
                </div>
                <div class="p">@goldenstars_cheer</div>
            </div>

            <div class="tiktok">
                <div class="button_yellow" id="bouton_reseaux">
                    <button> 
                        <a href="https://www.tiktok.com/@goldenstars_cheer?_t=8j3beqNb7Ng&_r=1 "> 
                            <div class="stars star-container">
                                <div class="star4"> <img src="img/yellow_button/star_4n.svg"> </div>
                                <div class="star3"> <img src="img/yellow_button/star_3n.svg"> </div>
                            </div>
                            <img src="photos/contact/tiktok.svg" class="logo_reseaux"/>
                        </a>
                    </button>
                </div>
                <div class="p">@goldenstars_cheer</div>
            </div>

            <div class="facebook">
                <div class="button_yellow" id="bouton_reseaux">
                    <button> 
                        <a href="https://www.facebook.com/people/Golden-Stars-Cheerleading/61551674859393/"> 
                            <div class="stars star-container">
                                <div class="star4"> <img src="img/yellow_button/star_4n.svg"> </div>
                                <div class="star3"> <img src="img/yellow_button/star_3n.svg"> </div>
                            </div>
                            <img src="photos/contact/facebook.svg" class="logo_reseaux"/>
                        </a>
                    </button>
                </div>
                <div class="p">Golden Stars Cheerleading</div>
            </div>
        </div>
    </section>

    <!--<section class="wrap">-->
        

        <h2>Contactez-nous</h2>

        <div class="contact">
        <img src="Photos/silhouette_blanche.svg" id="silhouette">
        <div class="informations">
            <div class="categorie">
                <div class="titre">
                    <h3>club</h3>
                    <span class="mot_jaune">Golden Stars Cheerleading</span>
                </div>

                <div>
                    <div class="p">
                    goldenstars.cheerleading73@gmail.com<br>
                    206 AVENUE GENERAL CARTIER<br>
                    73000 CHAMBÉRY<br>
                    R.N.A : W732011197<br>
                    SIRET 923779011 00017<br>
                    </div>
                </div>

                <div class="titre">
                    <h3>président</h3>
                    <span class="mot_jaune">Mr Christophe COLAS</span>
                </div>
               
                <div>
                    <div class="p">
                    06 50 43 17 23<br>
                    156 AVENUE DU GRANIER<br>
                    38530 PONTCHARRA<br>
                    </div>
                </div>
            </div>
        </div>

        <div class="formulaire">
            <form method="post">
                <label for="name">Nom</label><br>
                <input type="text" id="nom" name="nom" /><br>
            
                <label for="name">Prénom</label><br>
                <input type="text" id="prenom" name="prenom" /><br>
            
                <label for="mail">E-mail</label><br>
                <input type="email" id="mail" name="mail" /><br>
            
                <label for="mail">Objet</label><br>
                <input type="text" id="objet" name="objet" /><br>
            
                <label for="msg">Message</label><br>
                <textarea name="message" style="height:100px"></textarea><br>

                <div class="button_white"> 
                    <button> 
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> 
                            <div class="stars star-container">
                                <div class="star4"> <img src="img/white_star_button/star_4n.svg"> </div>
                                <div class="star3"> <img src="img/white_star_button/star_3n.svg"> </div>
                            </div>
                            Envoyer
                        </a>
                    </button>
                </div>
            </form> 
        </div>
        <img src="photos/fond_paillettes_gauche.svg" id="paillettes">
        </div>

<?php
get_footer();
?>