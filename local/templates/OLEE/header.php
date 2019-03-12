<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <!-- Meta tag Keywords -->
    <?$APPLICATION->ShowHead();?>

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/simpleLightbox.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/roadmap.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/snow.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos-animation.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fontawesome-all.css");?>

    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->



</head>

<body>
<?$APPLICATION->ShowPanel()?>

<!-- mian-content -->
<header class="index-banner" id="home">
    <!-- nav -->
    <nav class="main-header d-flex">
        <div id="brand">
            <div id="logo">
                <a href="#">
                    <i class="fas fa-crosshairs"></i>
                </a>
            </div>
            <div id="word-mark">
                <h1>
                    <a href="#">Recognize</a>
                </h1>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            "COMPONENT_TEMPLATE" => "horizontal_multilevel"
        ),
            false
        );?>
        <div class="clearfix"></div>
    </nav>
    <!-- //nav -->
    <!-- banner -->
    <div class="banner_section">
        <div class="snow-container">
            <div class="snow foreground"></div>
            <div class="snow foreground layered"></div>
            <div class="snow middleground"></div>
            <div class="snow middleground layered"></div>
            <div class="snow background"></div>
            <div class="snow background layered"></div>
        </div>
        <div class="banner-info text-uppercase">
            <h6 data-aos="fade-right">Introduction</h6>
            <h5 data-aos="fade-right">Hello, my name is Daniel</h5>
            <h3 data-text="I'm a Programmer">I'm a Programmer</h3>
            <div class="ban-buttons mt-3" data-aos="fade-right">
                <a class="btn work scroll" href="#projects">My Work</a>
                <a class="btn work scroll active" href="#contact">Here me</a>
            </div>

        </div>
    </div>
    <!-- //banner -->
</header>
<!-- //header -->
<!--// banner-slider -->
<!-- banner-bottom-wthree -->







