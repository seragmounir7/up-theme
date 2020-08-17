<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>up-advertise</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css?ver=4.22224522222244">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/favcon64.png" sizes="64x64">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick-theme.css">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/favcon64.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
    <?php wp_head(); ?>
    <meta property="og:title" content="Up advertising agency">
    <meta property="og:description" content="We are dedicated to provide a full advertising services that make creative ideas come to realty thought innovative digital marketing & branding">
    <meta property="og:url" content="http://up-advertise.com/">
    <meta property="og:site_name" content="Up advertising agency">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/up-sharer.jpg">
    <meta property="og:image:secure_url" content="<?php bloginfo('template_directory'); ?>/assets/img/up-sharer.jpg">
</head>
<body>
    <header>
        <div class="container">
            <div class="display-flex justify-content-space-between align-items-center flex-wrap-wrap">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
                </a>
                <div id="responsive-navbar">
                    <div class="display-flex justify-content-flex-end">
                        <i class="fas fa-times"></i>
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>