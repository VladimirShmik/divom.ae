<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" rel="icon">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <a href="/" class="header-logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="" class="header-logo__img">
                    </a>
                    <nav class="header-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </nav>
                    <div class="mobile-wrap">
                        <div class="mobile-nav">
                            <div class="burger-icon">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                        <div class="menu-wrap">
                            <!--mobile-menu-->
                            <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
                        </div>
                    </div>
                    <div class="header-contacts">
                        <a href="tel:971501460935" class="contacts-link">
                            <svg class="contacts-link__icon">
                                <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#phone-icon"></use>
                            </svg>
                            +971-501-46-09-35</a>
                        <a href="mailto:info@divom.ae" class="contacts-link">
                            <svg class="contacts-link__icon">
                                <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#mail-icon"></use>
                            </svg>
                            info@divom.ae</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>