        <footer>
            <div class="container">
                <a  href="<?php bloginfo('url'); ?>">
                    <img class="logo_footer" src="<?php echo get_template_directory_uri() ?>/img/logo-intervenance.png" alt="logo-intervenance">
                </a>
                <div class="credits">
                    <span class="mentions">© Copyright 2018 - Intervenance - Tous droits réservés   |   <a href="<?php the_field('mentions-legales');?>">Mentions légales</a>   |   <a href="<?php the_field('contact');?>"><?php the_field('contact_text');?></a></span>	
                    <span class="kookline-copyrights">Création et développement : <a href="http://www.kookline.net">KOOKline</a></span>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>