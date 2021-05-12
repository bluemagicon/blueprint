<?php
/*
 * Start-Standardseite wenn kein Template ausgewählt
 */
get_header();
?>


<?php if(have_rows('mainteaser_slider')){ ?>
    <div class="mainteaser-slider">
        <?php while(have_rows('mainteaser_slider')) : the_row(); ?>
            <div class="slide" style="background-image: url(<?php echo get_sub_field('bild')['url']; ?>);">
                <div class="content-wrapper">
                    <?php echo get_sub_field('inhalt'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php } ?>

<div class="container">
    <div class="three-box-wrapper">
        <?php while(have_rows('box-teaser')) : the_row(); ?>
            <?php if(get_sub_field('link') != ""){ ?><a href="<?php echo get_sub_field('link')['url']; ?>" class="box"><?php }else{ ?><div class="box"><?php } ?>
                <h2><?php echo get_sub_field('headline'); ?></h2>
                <div class="img-wrapper">
                    <img src="<?php echo get_sub_field('bild')['url']; ?>" alt="" />
                </div>
                <div class="content-wrapper">
                    <?php echo get_sub_field('inhalt'); ?>
                </div>
            <?php if(get_sub_field('link') != ""){ ?></a><?php }else{ ?></div><?php } ?>
        <?php endwhile; ?>
    </div>
</div>

<div class="map-wrapper">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=8.33858684753068%2C53.26925460049849%2C8.625261347042398%2C53.3551996604839&amp;layer=mapnik&amp;marker=53.31224876001011%2C8.481924097286537"></iframe>
</div>

<?php
get_footer();
