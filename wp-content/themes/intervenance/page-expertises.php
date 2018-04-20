<?php get_header(); ?>
    <main>
        <section class="slider_metiers bg-grey container">
            <div class="columns is-centered">
                <div class="metiers-header column is-12">
                    <div class="metiers-titre ">
                        <p><?php the_field('titre1_listemetiers'); ?></p> 
                        <p><?php the_field('titre2_listemetiers'); ?></p>
                    </div>
                </div>
            </div>       
            <div class="columns">
                <?php $loop = new WP_Query( array( 'post_type' => 'metier', 'posts_per_page' => '10' ) ); 
                 while ( $loop->have_posts() ) : $loop->the_post();  
                    $icone = get_field('icone_metier_bleu');
                    $intitule_metier = get_field('intitule_metier');
                    $description_metier = get_field('description_metier');
                    $image_metier = get_field('image_metier');
                    $icone_metier_bleu = get_field('icone_metier_bleu');
                    $icone_metier_vert = get_field('icone_metier_vert');
                    $icone_metier_blanc = get_field('icone_metier_blanc'); ?>
                <div class="card column"> 
                    <div class="icon-anim-profil">
                        <img src="<?php echo $icone['url']; ?>" alt="<?php echo $icone['alt'] ?>"/>
                    </div>
                    <div class="content-profil">
                        <h1><?php echo $intitule_metier; ?></h1>  
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
                
                
            </div>
        </section>
        
        <?php 
            $loop = new WP_Query( array( 'post_type' => 'metier', 'posts_per_page' => '10' ) ); 
           while ( $loop->have_posts() ) : $loop->the_post();  $icone = get_field('icone_metier_bleu'); 
            
            ?>
            <section class="metiers">
                <div class="col-md-6 img-metier">
                    <?php if( !empty($image_metier) ): ?>
                    <img src="<?php echo $image_metier['url']; ?>" alt="<?php echo $image_metier['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-md-6 content-metier">
                    <?php echo  $intitule_metier; ?>
                </div>
            </section>
           <?php
        endwhile;
    ?>
    </main>
    <script>
        var listeMetiers = document.querySelectorAll(".metiers");
        for (i=0; i<listeChiffresCles.length;i++){
            listeMetiers[i].id = "metier-"+(i+1);
        }
    </script>
<?php get_footer(); ?>