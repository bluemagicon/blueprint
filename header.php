<!doctype html>
<html lang=de>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit-icons.min.js"></script>

    <?php wp_head(); ?>
</head>
<body>
<style lang="scss">
    :root{
        --key-color: <?php echo get_field('primarfarbe', 11); ?>;
    }
</style>



<header id="header">
    <div class="container">
        <a href="<?php echo get_home_url(); ?>" class="logo-wrapper img-wrapper">
            <img src="<?php echo get_field('logo', 11)['url']; ?>" alt="" />
        </a>
        <div class="header-right">
            <div class="contact-bar">

            </div>
            <div class="mainnav-wrapper">
                <?php echo wp_nav_menu(array('menu' => 'Hauptnavigation')); ?>
            </div>
        </div>
    </div>
</header>
