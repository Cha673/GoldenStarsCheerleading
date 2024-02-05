<?php
    /* Template Name: Contacts */

    get_header();
    $logo_insta=get_field('logo_instagram');
    $link_insta=get_field('link_instagram');
    $name_insta=get_field('name_compte_insta');
    $logo_facebook=get_field('logo_facebook');
    $link_facebook=get_field('link_facebook');
    $name_facebook=get_field('name_compte_facebook');
    $logo_tiktok=get_field('logo_tiktok');
    $link_tiktok=get_field('link_tiktok');
    $name_tiktok=get_field('name_compte_tiktok');
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
    <section class="blanc_contact">
        <h2>Réseaux sociaux</h2>
        <div class="reseaux">
            <div class="instagram">
                <div class="button_yellow" id="bouton_reseaux">
                <button> 
                    <a href="<?php echo($link_insta) ?>" target="_blank"> 
                        <div class="stars star-container">
                            <div class="star4"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_4n.svg'?>"> </div>
                            <div class="star3"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_3n.svg'?>"> </div>
                        </div>
                        <img  class="logo_contact" 
                            src="<?php echo ($logo_insta['sizes']["medium"]);?>" 
                            height="<?php echo ($logo_insta['sizes']["medium-height"]);?>" 
                            width="<?php echo ($logo_insta['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($logo_insta['alt']);?>" 
                        title="logo instagram" >
                    </a>
                </button>
                </div>
                <div class="p"><?php echo($name_insta)?></div>
            </div>

            <div class="tiktok">
                <div class="button_yellow" id="bouton_reseaux">
                    <button> 
                        <a href="<?php echo($link_tiktok) ?>" target="_blank"> 
                            <div class="stars star-container">
                                <div class="star4"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_4n.svg'?>"> </div>
                                <div class="star3"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_3n.svg'?>"> </div>
                            </div>
                            <img  class="logo_contact" 
                            src="<?php echo ($logo_tiktok['sizes']["medium"]);?>" 
                            height="<?php echo ($logo_tiktok['sizes']["medium-height"]);?>" 
                            width="<?php echo ($logo_tiktok['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($logo_tiktok['alt']);?>" 
                        title="logo tiktok" >
                        </a>
                    </button>
                </div>
                <div class="p"><?php echo($name_tiktok)?></div>
            </div>

            <div class="facebook">
                <div class="button_yellow" id="bouton_reseaux">
                    <button> 
                        <a href="<?php echo($link_facebook) ?>" target="_blank"> 
                            <div class="stars star-container">
                                <div class="star4"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_4n.svg'?>"> </div>
                                <div class="star3"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_3n.svg'?>"> </div>
                            </div>
                            <img  class="logo_contact" 
                            src="<?php echo ($logo_facebook['sizes']["medium"]);?>" 
                            height="<?php echo ($logo_facebook['sizes']["medium-height"]);?>" 
                            width="<?php echo ($logo_facebook['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($logo_facebook['alt']);?>" 
                            title="logo tiktok" >
                        </a>
                    </button>
                </div>
                <div class="p"><?php echo($name_facebook)?></div>
            </div>
        </div>
    </section>

    <section class="wrap">
        <div>

        <h2 class="text_blanc">Contactez-nous</h2>
        </div>

        <div class="contact">
        <div >
            <div class="categorie_contact">
                <div class="titre">
                    <h3>club</h3>
                    <div class="mot_jaune"><?php echo($name_club)?></div>
                </div>

                <div>
                    <div class="p">
                    <?php echo($mail_club)?><br>
                    <?php echo($adress_club)?><br>
                    R.N.A : <?php echo($num_rna)?><br>
                    SIRET <?php echo($num_siret)?><br>
                    </div>
                </div>

                <div class="titre">
                    <h3>président</h3>
                    <div class="mot_jaune"><?php echo($name_president)?></div>
                </div>
               
                <div>
                    <div class="p">
                    <?php echo($num_president)?><br>
                    <?php echo($adress_president)?><br>
                    </div>
                </div>
            </div>
        </div>

        <div class="formulaire">
        <form action="mailto:goldenstars.cheerleading73@gmail.com" 
            method="get" enctype="text/plain" 
            target="_blank" autocomplete="on"><br>
                <label for="name">Nom</label><br>
                <input type="text" id="nom" name="nom" autocomplete="on"><br>
            
                <label for="name">Prénom</label><br>
                <input type="text" id="prenom" name="prenom" autocomplete="on"><br>
            
                <label for="mail">E-mail</label><br>
                <input type="email" id="mail" name="mail" autocomplete="on"><br>
            
                <label for="mail">Objet</label><br>
                <input type="text" id="objet" name="objet" autocomplete="on"><br>
            
                <label for="msg">Message</label><br>
                <textarea name="message" style="height:100px"></textarea><br>

                <p class="rgpd">Les données collectées via ce formulaire ne seront pas revendues ou données
                    à des entreprises tierces, elles seront utilisées
                    a des fins commerciales avec le propriétaire de l'association GoldenStarsCheerleading.
                </p>
                <div class="button_white_contact"> 
                    <button> 
                        <div class="button_contact_submit">
                            <div class="stars star-container">
                                <div class="star4"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_4n.svg'?>"> </div>
                                <div class="star3"> <img src="<?php echo get_template_directory_uri() . '/illustration/yellow_button/star_3n.svg'?>"> </div>
                            </div>
                            Envoyer
                        </div>
                    </button>
                </div>
            </form> 
        </div>
        </div>
    </section>
<?php
get_footer();
?>