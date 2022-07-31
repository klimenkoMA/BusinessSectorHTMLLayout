<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();
?>
<!DOCTYPE html>
<html lang="">

<head>

    <meta charset="utf-8">
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="description" content="Startup HTML template OptimizedHTML 5">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="<?SITE_TEMPLATE_PATH?>images/favicon.png">
    <meta property="og:image" content="<?SITE_TEMPLATE_PATH?>images/dest/preview.jpg">

    <?$APPLICATION ->ShowHead();?>

    <?
     $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/custom.css');
     $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/app.min.css');
     $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'css/slick/slick-theme.css');
     $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'css/slick/slick.css');
     ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<section id="header">
    <div class="container mob-none">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div style="width: 120px; height: 20px; background-color: red" class="logo"></div>
            </div>
            <div class="col-lg-4 col-md-3">
                <form action="" method="get">
                    <div class="search-container">
                        <input type="search" id="search" name="search" placeholder="Поиск..."/>
                        <button type="submit" name="click-search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-3">
                <div class="geolocation-container">
          <span class="icon">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
          </span>
                    <span class="your-city">Ваш город:</span>
                    <a href="#" class="city-name">Москва</a>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-4 header-contacts-col">
                <div class="call-container">
                    <a href="tel:+79999999999">
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="head-phone">+7 (999) 999 99 99</span>
                    </a>
                </div>
                <div class="mail-container">
                    <a href="mailto:test@test.ru">
            <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
                        <span>
              test@test.ru
          </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mob-menu pc-none">
        <div class="row mobile-menu-row">
            <div class="header-holder">
                <header class="header">
                    <div class="search-mobile" style="display: block;">
                        <a rel="nofollow">
                            <i class="icon_search"></i>
                        </a>
                    </div>

                    <nav class="header-nav">
                        <div class="header-nav__inner">
                            <ul class="header-menu-list">
                                <li class="header-menu-item">
                                    <a href="№">Производители</a>
                                </li>
                                <li class="header-menu-item">
                                    <a rel="nofollow" href="#">Услуги</a>
                                </li>
                                <li class="header-menu-item">
                                    <a href="#">Склад</a>
                                </li>
                                <li class="header-menu-item">
                                    <a href="#">Разработка</a>
                                </li>
                                <li class="header-menu-item">
                                    <a rel="nofollow" href="#">О компании</a>
                                </li>
                                <li class="header-menu-item">
                                    <a class="active" href="#">Контакты</a>
                                </li>
                                <li class="header-menu-item">
                                    <a rel="nofollow" href="#">Корзина</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <a href="/" style="background-color: red; background-image: none;" class="logo"></a>

                    <a href="#" class="device-menu">
                        <div class="device-menu__inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </header>
            </div>

        </div>
    </div>
    <div class="menu-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 cat-wrapper">
                    <div class="cat-list-toggler">
                        <div class="burger">
                            <div class="stick stick-25"></div>
                            <div class="stick stick-50"></div>
                            <div class="stick stick-100"></div>
                        </div>
                        <p>Каталог товаров</p>
                    </div>
                    <div class="categories">
                        <div class="content">
                            <ul class="cat-list">
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Категория
                                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right.png" alt="right">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="show-all">
              <span class="circle">
              <img src="<?SITE_TEMPLATE_PATH?>images/icons/arrow-right-white.png" alt="right">
              </span> Посмотреть всю продукцию
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8">
                    <ul class="navigation">
                        <li>
                            <a href="#">Производители</a>
                        </li>
                        <li>
                            <a href="">Услуги</a>
                        </li>
                        <li>
                            <a href="">Склад</a>
                        </li>
                        <li>
                            <a href="">Разработка</a>
                        </li>
                        <li>
                            <a href="">О компании</a>
                        </li>
                        <li>
                            <a href="">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="#" class="cart">
                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/cart.png" alt="cart">
                        <p>Корзина</p>
                        <span class="counter">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-search">
        <div class="container">
            <form action="" id="search-form">
                <label class="inp-wrap" for="search">
                    <input type="search" placeholder="Поиск..." name="search" id="search">
                    <button class="search-btn">
                        <img src="<?SITE_TEMPLATE_PATH?>images/icons/search.png" alt="search">
                    </button>
                </label>
                <button type="button" class="options">
                    <img src="<?SITE_TEMPLATE_PATH?>images/icons/audio.png" alt="options">
                </button>
                <button type="button" class="categories-mobile">
                    <div class="burger">
                        <div class="stick stick-25"></div>
                        <div class="stick stick-50"></div>
                        <div class="stick stick-100"></div>
                    </div>
                </button>
            </form>
        </div>
    </div>
</section>