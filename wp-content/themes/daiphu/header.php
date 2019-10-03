<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.9.9">
    <link rel="stylesheet" href="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/css/main.css") ?>">
    
</head>
<body>
<header>
    <div class="logo">
        <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/logo-normal.svg")?>" alt="" class="img-responsive logo-normal">
        <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/logo-scroll.svg")?>" alt="" class="img-responsive logo-scroll">
    </div>
    <div class="menu-primary menu-mobile">
        <ul class="snip-list">
            <li id="menu-item-255" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-255"><a title="Trang chủ" href="<?php printf(get_bloginfo('url')) ?>" aria-current="page">Trang chủ</a></li>
            <li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a title="Dự án" href="<?php printf(get_bloginfo('url')."/du-an")?>">Dự án</a></li>
            <li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a title="Phong thủy" href="<?php printf(get_bloginfo('url')."/phong-thuy")?>">Phong thủy</a></li>
            <li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237"><a title="Tin tức" href="<?php printf(get_bloginfo('url')."/tin-tuc")?>">Tin tức</a></li>
            <li id="menu-item-236" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-236"><a title="Liên hệ" href="<?php printf(get_bloginfo('url')."/lien-he")?>">Liên hệ</a></li>
        </ul>
        <a href="tel:0939332881" class="icon-phone">
            <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/icon-phone.png")?>" alt="">
            093 9332 881
        </a>
    </div>
    <div class="hamburger">
        <div class="menu menu--close4">
            <div class="menu__icon">
                <div class="menu__line menu__line--1"></div>
                <div class="menu__line menu__line--2"></div>
                <div class="menu__line menu__line--3"></div>
            </div>
        </div>
    </div>
    <div class="social-line">
        <ul>
            <li>
                <a href="https://www.facebook.com/diaocdaiphuland/" target="_blank">
                    <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/fb.png")?>" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="tel:0939332881">
                    <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/phone.png")?>" alt="" class="img-responsive">
                </a>

            </li>
            <li>
                <a href="mailto:datlongkhanh68@gmail.com">
                    <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/mail.png")?>" alt="" class="img-responsive">
                </a>
            </li>
        </ul>
    </div>
</header>
<?php get_template_part('part/main','formc') ?>