


<footer id="footer">
    <div class="container">
        <div class="col">
            <h6>Öffnungszeiten</h6>
            <?php echo get_field('offnungszeiten', 11); ?>
        </div>
        <div class="col">
            <h6>Kontakt</h6>
            <p>
                Tel: <a href="tel:<?php echo get_field('telefon', 11); ?>"><?php echo get_field('telefon', 11); ?></a> <br />
                E-Mail: <a href="mailto:<?php echo get_field('e-mail', 11); ?>"><?php echo get_field('e-mail', 11); ?></a>
            </p>
        </div>
        <div class="col">
            <h6>Sitemap</h6>
            <?php wp_nav_menu(array('menu' => 'Hauptnavigation')); ?>
        </div>
        <div class="col">
            <h6>Socials</h6>
            <div class="socials">
                <?php while(have_rows('socials', 11)) : the_row(); ?>
                    <?php if(get_sub_field('instagram') != ""){ ?>
                        <a href="<?php echo get_sub_field('instagram') ?>" class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-black.svg" alt="" />
                        </a>
                    <?php } ?>
                    <?php if(get_sub_field('facebook') != ""){ ?>
                        <a href="<?php echo get_sub_field('instagram') ?>" class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-black.svg" alt="" />
                        </a>
                    <?php } ?>
                    <?php if(get_sub_field('twitter') != ""){ ?>
                        <a href="<?php echo get_sub_field('instagram') ?>" class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/twitter-black.svg" alt="" />
                        </a>
                    <?php } ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</footer>
<div class="footer-meta">
    <div class="container">
        <span>&copy; <?php echo date('Y') ?> Alle Rechte vorbehalten</span><span><a href="<?php echo get_permalink(61); ?>">Impressum</a> | <a href="<?php echo get_permalink(63); ?>">Datenschutz</a></span>
    </div>
</div>


<?php wp_footer(); ?>

    </body>
</html>
