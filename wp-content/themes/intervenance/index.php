<?php get_header(); ?>
<div class="fixed-callback">
    <div class="content-callback">
        <span class="callback">Vous avez un projet ?</span><br/>
        <span class="callback-green"> On vous rappelle !</span>
    </div>
</div>
    <main>
        <section class="hero">

            <?php if( have_rows('slider_header') ):
                while ( have_rows('slider_header') ) : the_row();
                    $title = get_sub_field('slider_titre1');
                    $subtitle = get_sub_field('slider_titre2');
                    $image_slide = get_sub_field('image_slide');
                    $link_slide = get_sub_field('slider_lien');
                    $text_link_slide = get_sub_field('slider_texte_lien');
                    $slider_details = get_sub_field('slider_details');?>
                <?php if( !empty($image_slide) ): ?>
                    <div class="img_slider-conteneur">
                        <img class="img_slider-home" src="<?php echo $image_slide['url']; ?>" alt="<?php echo $image_slide['alt']; ?>" />
                    </div>
                <?php endif; ?>  
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-centered">
                       <div class="column is-7">
                           <span class="small-blue"><?php echo $title;?></span>
                           <span class="grey-title"><?php echo $subtitle;?></span>
                           <?php echo $slider_details; ?>
                           <a href="<?php echo $lien; ?>" class="button blue icon-bulle-valise">
                               <?php echo $text_link_slide; ?>
                           </a>
                       </div>
                    </div>
                    <div class="header-scroll">
                        <a href="#contact-us"> <img src="<?php bloginfo('template_directory');?>/img/scroll-icone.png" alt=""> </a>
                    </div> 
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>
            <div class="svg-block-slider">
                <div class="svg-container">
                    <svg viewBox="0 0 1668 185" preserveAspectRatio="xMinYMin meet" class="svg-content">
                        <path fill="#ffffff" stroke="#ffffff" stroke-width="1.5" d="m3,25.5c0,0 327,71 847,25c520,-46 822,-44 822,-44.5c0,0.5 1,176.5 1,176.5c0,0 -1670,3 -1670,2.5c0,0.5 0,-159.5 0,-159.5z" id="svg_8"></path>
                    </svg>
                </div>
            </div>  
        </section>
       
        <section class="profils section">
                
            <div class="container">
                <div class="columns">
                    <div class="content_profil column is-5">
                        <span class="titre-categ"><span class="small-green"><?php the_field('titre_profil_vert'); ?></span> 
                        <?php the_field('titre_profil_gris'); ?></span>
                        <?php the_field('description'); ?> 
                        <div class="form_profil columns">
                            <form action="" class="column is-7 is-10-tablet is-12-mobile">
                                <input type="text" class="callback_name" placeholder="Votre nom/prénom"/>
                                <input type="text" class="callback_phonenumber" placeholder="Votre numéro de téléphone"/>
                                <input type="submit" value="Être rappelé" class="button green button-callme">
                            </form>
                        </div>
                    </div>
                    <div class="column is-1"></div>
                    <div class="anim-profil column is-5">
                        <div class="bg_anim"></div>
                        <?php if( have_rows('vignette_profil') ):?>
                        <div class="liste-profils">
                            <?php while ( have_rows('vignette_profil') ) : the_row();?>
                            <div class="profil">                            
                                <a href="<?php the_sub_field('lien_profil'); ?>">
                                    <div class="icon-anim-profil">
                                    <?php $icone_profil = get_sub_field('icone_profil');
                                    if( !empty($icone_profil) ): ?>
                                        <img src="<?php echo $icone_profil['url']; ?>" alt="<?php echo $icone_profil['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <span class="small"><?php the_sub_field('intitule_profil'); ?></span>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php else : endif; ?>
                    </div>
                    <div class="column is-1"></div>
                </div>
            </div>

        </section>
        <section class="accroche bg-grey section">
           <div class="container">
                <div class="columns">
                   <div class="image_accroche column is-5">
                       <?php 
                        $image_accroche = get_field('image_accroche');
                        if( !empty($image_accroche) ): ?>
                            <img src="<?php echo $image_accroche['url']; ?>" alt="<?php echo $image_accroche['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="content_accroche column is-6">
                            <span class="h2"><?php the_field('titre_accroche'); ?></span>
                            <?php the_field('paragraphe_accroche1'); ?>
                            <p class="h3"><?php the_field('sous-titre_accroche'); ?></ph3>
                            <h2><?php the_field('verbes_accroche'); ?> </h2>
                            <?php if( have_rows('boutons_accroche') ):
                                while ( have_rows('boutons_accroche') ) : the_row();
                                $btn1_text = get_sub_field('btn1_text');
                                $btn1_link = get_sub_field('btn1_link');
                                $btn2_text = get_sub_field('btn2_text');
                                $btn2_link = get_sub_field('btn2_link');
                                ?>
                                <div class="field is-grouped">
                                    <a href="<?php the_sub_field('btn1_link'); ?>" class="control button button-chevron blue"><?php $btn1_text; ?><?php the_sub_field('btn1_text'); ?> 
                                    </a>
                                    <a href="<?php the_sub_field('btn2_link'); ?>" class="control button green button-chevron"><?php $btn2_text; ?><?php the_sub_field('btn2_text'); ?>
                                </a>
                            </div>
                            <?php endwhile;
                            else :
                            endif;
                            ?>
                    </div>               
                </div>  
            </div>
        </section>
        <section class="chiffres bg-green section">
           <div class="container">
                <?php if( have_rows('chiffres_cles') ): ?>
                <div class="columns">

                <ul class=" categ_chiffres">
                    <?php while( have_rows('chiffres_cles') ): the_row(); 
                        $icone = get_sub_field('icone_chiffres-cles');
                        $chiffre = get_sub_field('nb_chiffres-cles');
                        $valeur = get_sub_field('valeur_chiffres-cles');
                        $phrase1 = get_sub_field('details_chiffres-cles-avant');
                        $phrase2 = get_sub_field('details_chiffres-cles-apres');
                        $percent = get_sub_field('pourcentage_chiffres-cles');
                    ?>
                    <li class="column is-one-fifth">
                        <?php if( $phrase1): ?>
                            <span class="phrase1"><?php echo $phrase1; ?></span>
                        <?php endif; ?>
                        <img class="icone-chiffre-cle" src="<?php echo $icone['url']; ?>" alt="<?php echo $icone['alt'] ?>" />
                        <span class="chiffre"><?php echo $chiffre; ?><?php if( $percent == true): ?>%<?php endif; ?></span>
                        <span class="phrase1"><?php echo $valeur; ?></span>
                        <span class="phrase2">
                            <?php echo $phrase2; ?>
                        </span>
                    </li>
                    <?php endwhile; ?>
                </ul>
                </div>

                <?php endif; ?>
           </div>
           <div class="svg-block">
                <div class="svg-container">
                <svg viewBox="0 0 1800 189" preserveAspectRatio="xMinYMin meet" class="svg-content">
                    <path id="svg_5" d="m84.5,97.5" opacity="0.5" stroke-width="1.5" stroke="#0f0f00" fill="none"></path>
                    <path id="svg_6" d="m307,-82" opacity="0.5" stroke-width="1.5" stroke="#0f0f00" fill="none"></path>
                    <path id="svg_9" d="m1770.125,71.375c0,0 -387.5,-47 -626,-28.5c-238.5,18.5 -1060,54 -1060,54c-2.75,1 -53.125,13.125 -43,18c137,37 1590,36.5 1620,36c-0.5,3.25 120,-74.5 109,-79.5z" stroke-width="1.5" fill="#31a58d"></path>
                    <path id="svg_10" d="m64.5,116.75" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" stroke="#0f0f00" fill="none"></path>
                    <path id="svg_4" d="m-1.129074,75c0,0 198.329198,98 991.645991,38c793.316793,-60 811.346721,-42 810.345058,-42.5c1.001663,0.5 -1.001663,114.5 -2.003325,114c1.001662,0.5 -1805.9977,4.5 -1804.996037,4c-1.001663,0.5 5.008313,-113.5 5.008313,-113.5z" stroke-width="1.5" fill="#ffffff"></path>
                </svg>
                </div>
            </div>
        </section>
        <section class="quisommesnous bg-white section">
            <div class="block">
                <div class="container">
                    <div class="columns">
                        <div class="column swirl_quisommesnous is-4-desktop is-4-tablet is-12-mobile">
                            <img src="<?php bloginfo('template_directory');?>/img/anim/swirl_quisommesnous.png"/>
                            <span class="h2">Qui <br/>sommes-nous ?</span>
                        </div>
                    
                        <div class="column is-4-desktop is-4-tablet is-12-mobile">
                            <h3><?php the_field('titre_liste_quisommesnous'); ?></h3>
                            <ul class="liste_puces">
                                <li class="liste_puces_bulles">
                                    <i class="fa fa-circle-o-notch puce" aria-hidden="true"></i>
                                    <?php the_field('item1_liste_quisommesnous');?>
                                </li>
                                <li class="liste_puces_bulles">
                                    <i class="fa fa-circle-o-notch puce" aria-hidden="true"></i>
                                    <?php the_field('item2_liste_quisommesnous');?>
                                </li>
                                <li class="liste_puces_bulles puce">
                                    <i class="fa fa-circle-o-notch puce" aria-hidden="true"></i>
                                    <?php the_field('item3_liste_quisommesnous');?>
                                </li>
                            </ul>
                        </div>
                        <div class="column is-4-desktop is-4-tablet is-12-mobile">
                            <h3><?php the_field('titre_notreengagement');?></h3>
                            <p><?php the_field('content_notreengagement');?></p>
                            <h3><?php the_field('titre_notrehistoire');?></h3>
                            <p><?php the_field('content_notrehistoire');?></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="expertises-metiers section">
            <div class="hero">
                <span class="titre-categ">
                    <span class="small-blue-center"><?php the_field('titre_expertise_bleu'); ?></span> 
                    <?php the_field('sous_titre_expertise_metier'); ?>
                </span>
                <div class="cards columns">
                    <?php $loop = new WP_Query( array( 'post_type' => 'metier', 'posts_per_page' => '10' ) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $icone = get_field('icone_metier_blanc');
                        $intitule_metier = get_field('intitule_metier'); 
                        $description_metier = get_field('description_metier'); 
                        $lien_page_metier = get_field('lien_page_metier'); 
                        ?>
                    <div class="card column"> 
                        <div class="icon-anim-profil">
                            <img src="<?php echo $icone['url']; ?>" alt="<?php echo $icone['alt'] ?>"/>
                        </div>
                        <div class="content-profil">
                            <h1><?php the_field('intitule_metier') ?></h1>  
                            <p><?php echo wp_trim_words(get_field('description_metier'),20,'...'); ?></p>
                            <a href="<?php echo $lien_page_metier['url'];?>" class="button green button-chevron  hidden-button">En savoir plus</a>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <section class="difference bg-white section">
            <div class="container">
                <div class="expertises-metiers-header">
                    <div class="expertises-metiers-titre">
                        <span class="titre-categ">
                        <span class="small-green center"><?php the_field('titre_difference_vert'); ?></span> 
                            <?php the_field('sous-titre_difference'); ?>
                        </span>
                    </div>
                </div>
                   
                <?php if( have_rows('colonnes_difference') ): ?>
                <div class="colonnes_difference columns">
                    <?php while( have_rows('colonnes_difference') ) : the_row();
                        $icone = get_sub_field('icone_difference');
                        $ligne1 = get_sub_field('titre_difference_ligne1');
                        $ligne2 = get_sub_field('titre_difference_ligne2');
                        $details = get_sub_field('details_difference');
                    ?>
                    <div class="column col">
                        <img class="icone_difference" src="<?php echo $icone['url']; ?>" alt="<?php echo $icone['alt'] ?>" />
                        <span class="ligne1"><?php echo $ligne1; ?></span>
                        <span class="ligne2"><?php echo $ligne2; ?></span>
                        <?php if( $details): ?>
                            <span class="details-difference"><?php echo $details; ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

            </div>
            
        </section>
        <section class="intermediation bg-blue section" id="contact-us">
            <div class="container">
                <span class="titre-categ">
                    <span class="small-white-center"><?php the_field('titre_intermediation'); ?></span> 
                    <?php the_field('sous_titre_intermediation'); ?>
                </span>
                <p class="details-intermediation"><?php the_field('details_intermediation'); ?></p>
            </div>    
        </section>
    </main>
    <!-- icone-chiffre-cle -->
    <script>
        $(document).ready(function(){
            // Cards section expertises métiers
             $('.cards').slick({
                arrows: true,
            centerMode: true,
            slidesToShow:5,
            focusOnSelect:true,
            prevArrow:"<button type='button' class='slick-prev slick-arrow'><</button>",
            nextArrow:"<button type='button' class='slick-next slick-arrow'></button>",
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    swipe:true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    swipe:true,
                    centerMode: true,
                    slidesToShow: 1
                }
                }
            ]
            });
            function changeIcon(){
                let selectedCard = querySelector(".active-slide");
                let relatedIcon = querySelector(".active-slide");
                if (selectedCard.classList.contains('active-slide')){
                    
                }

            }
            //ajout d'un id unique pour placer chaque icone individuellement par rapport au chiffre clé
            var listeChiffresCles = document.querySelectorAll(".categ_chiffres>li>img");
            for (i=0; i<listeChiffresCles.length;i++){
                listeChiffresCles[i].id = "icone-"+(i+1);
            }
            
            //ajout d'un id unique pour chaque icone profil
            var listeProfils = document.querySelectorAll(".profil");
            for (i=0; i<listeProfils.length;i++){
                listeProfils[i].id = "profil-"+(i+1);
            }
        });
    </script>
<?php get_footer(); ?>