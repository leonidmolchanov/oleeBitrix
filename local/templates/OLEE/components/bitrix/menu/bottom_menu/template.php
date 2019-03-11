<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <div class="col-lg-2 col-md-4">
        <ul class="list-footer" data-aos="fade-up">

<?
foreach($arResult as $arItem):?>

        <li><a href="<?=$arItem["LINK"]?>" class="nav-link scroll"><?=$arItem["TEXT"]?></a></li>

<?endforeach?>


    </ul>
    </div>

<?endif?>