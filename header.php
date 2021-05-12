<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit-icons.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<style lang="scss">
    :root{
        --key-color: <?php echo get_field('primarfarbe', 11); ?>;
    }
</style>


<div class="social-bar">
    <div class="container">
        <div class="socials">
            <?php while(have_rows('socials', 11)) : the_row(); ?>
                <?php if(get_sub_field('instagram') != ""){ ?>
                    <a href="<?php echo get_sub_field('instagram') ?>" class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="" />
                    </a>
                <?php } ?>
                <?php if(get_sub_field('facebook') != ""){ ?>
                    <a href="<?php echo get_sub_field('instagram') ?>" class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="" />
                    </a>
                <?php } ?>
                <?php if(get_sub_field('twitter') != ""){ ?>
                    <a href="<?php echo get_sub_field('instagram') ?>" class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="" />
                    </a>
                <?php } ?>
            <?php endwhile; ?>
        </div>
        <div class="contacts">
            <a href="tel:<?php echo get_field('telefon', 11); ?>" class="img-wrapper phone">
                <img src="<?php echo get_template_directory_uri(); ?>/img/phone-call.svg" alt="" />
                <div class="text">
                    <?php echo get_field('telefon', 11); ?>
                </div>
            </a>
            <a href="mailto:<?php echo get_field('e-mail', 11); ?>" class="img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt="" />
                <div class="text">
                    <?php echo get_field('e-mail', 11); ?>
                </div>
            </a>
        </div>
    </div>
</div>
<header id="header">
    <div class="container">
        <a href="<?php echo get_home_url(); ?>" class="logo-wrapper img-wrapper">
            <img src="<?php echo get_field('logo', 11)['url']; ?>" alt="" />
        </a>
        <div class="mainnav-wrapper">
            <?php echo wp_nav_menu(array('menu' => 'Hauptnavigation')); ?>
        </div>
        <div class="mobile-actions">
            <div class="mobile-btn">
                <div class="mobile-btn-holder">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <?php echo wp_nav_menu(array('menu' => 'Hauptnavigation')); ?>
</div>
