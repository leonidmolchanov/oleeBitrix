<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <div id="menu">
        <div id="menu-toggle">
            <div id="menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
<!--        <ul class="text-center nav-honey">-->
<!--            <li>-->
<!--                <a href="#" class="active ">Home</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="scroll" href="#about">About</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="scroll" href="#services">Services</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="scroll" href="#projects">Projects</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="scroll" href="#contact">Contact</a>-->
<!--            </li>-->
<!--            <li class="login">-->
<!--                <button type="button" class="btn login-btn text-uppercase " data-toggle="modal" data-target="#exampleModalCenter">-->
<!--                    Login-->
<!--                </button>-->
<!--            </li>-->
<!--        </ul>-->

<!--<ul id="horizontal-multilevel-menu">-->
<!--        <pre>--><?//print_r($arResult)?><!--</pre>-->
        <ul class="text-center nav-honey">

<?
foreach($arResult as $arItem):?>

        <li><a href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="active " <?else:?> class="scroll"<?endif?>><?=$arItem["TEXT"]?></a></li>

<?endforeach?>


                        <li class="login">
                            <button type="button" class="btn login-btn text-uppercase " data-toggle="modal" data-target="#exampleModalCenter">
                                Login
                            </button>
                        </li>
                    </ul>

    </div>

<?endif?>