<?php
    /* Template Name: Inscription */

    get_header();

    $inscription=get_field('date_inscription');
    $docs_tabs=get_field('documents_a_telecharger');
    $paid=get_field('moyen_paiement');
    $help_tab=get_field('help');
    $how_pay_tab=get_field('how_pay');
    $donation=get_field('make_donation');
    $link_don=get_field('make_donation');

?>
    <section class="wrap">
            <h1>INSCRIPTION</h1>
            <div class="fond_noir">
                <div class="presentation"><?php echo($inscription)?></div>
            </div>
            <div class="documents">
                <h2 class="sub_title">DOCUMENTS A TÉLÉCHARGER</h2>
                <img id="ligne_paillettes" 
                src="<?php echo get_template_directory_uri() . '/illustration/paillettes_ligne_titre.png';?>" 
                title="paillettes_ligne" alt="paillettes_ligne">

                <?php foreach ($docs_tabs as $infos) {
                        $name = $infos['name_doc_download']; 
                        $docs= $infos['doc_download'];  
                ?>
                    <div class="underline_button">
                        <button class="underline">
                            <div class="double_star"> 
                                <img src="<?php echo get_template_directory_uri() . '/illustration/underline_button/double_star.svg';?>"> 
                            </div>
                            <div>
                                <a href=<?php echo $docs['url']; ?> target="_blank"><?php echo($name) ;?></a>
                                <div class="trait"> </div> 
                            </div>
                        </button>
                    </div>

                <?php }?>

                <div class="informations_paid "><?php echo($paid);?></div>


                <img class="etoile_fond1" 
                src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg';?>" 
                title="etoile_fond" alt="etoile_fond">
                <img class="etoile_fond2" 
                src="<?php echo get_template_directory_uri() . '/illustration/grande_etoile_fond.svg';?>" 
                title="etoile_fond" alt="etoile_fond">

            </div>
        </section>
        
            </div>
            <div class="paiement">
                <div class="fond_blanc">
                    <h2 class="sub_title">Moyens de paiement :</h2>

                    <div class="logos_paiment">
                    <?php foreach ($help_tab as $help) {
                        $img_help= $help['logo_organisme']; 
                        $organism= $help['montant_max'];  
                    ?>
                        <div class="moyens_text">
                            <img class="logo_organism" 
                            src="<?php echo ($img_help['sizes']["medium"]);?>" 
                            height="<?php echo ($img_help['sizes']["medium-height"]);?>" 
                            width="<?php echo ($img_help['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($img_help['alt']);?>"/>
                            <div class="max_price"><?php echo($organism)?></div>
                        </div>
                    <?php }?>
                    </div>
                    <div class="moyen_paiement">
                    <?php foreach ($how_pay_tab as $how_pay) {
                        $img_pay= $how_pay['pay_logo']; 
                        $name_pay= $how_pay['name_pay'];  
                    ?>
                        <div class="moyens_text">
                            <img class="moyen" 
                            src="<?php echo ($img_pay['sizes']["medium"]);?>" 
                            height="<?php echo ($img_pay['sizes']["medium-height"]);?>" 
                            width="<?php echo ($img_pay['sizes']["medium-width"]);?>" 
                            alt="<?php echo ($img_pay['alt']);?>" />
                            <div class="max_price"><?php echo($name_pay)?></div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        <section class="wrap">
            <div class="don">
                <div class="fond_noir">
                    <p>Vous ne souhaitez pas vous inscrire mais vous voulez nous soutenir ?</p>
                    <div class="button_white"> 
                        <button> 
                            <a href="<?php echo($link_don) ?>" target="_blank"> 
                                <div class="stars star-container">
                                    <div class="star4"> 
                                        <img src="<?php echo get_template_directory_uri() . '/illustration/white_star_button/star_4j.svg';?>">
                                     </div>
                                    <div class="star3"> 
                                    <img src="<?php echo get_template_directory_uri() . '/illustration/white_star_button/star_3j.svg';?>"> 
                                    </div>
                                </div>
                                <p class="text_button">Faire un don</p>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>


<?php
get_footer();
?>