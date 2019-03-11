<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!--<pre>--><?//print_r($arResult);?><!--</pre>-->

<div class="gallery-inner container py-md-5 py-4">
    <div class="row mt-lg-5 stats-con text-white">
                    <?foreach($arResult["ITEMS"] as $arItem):?>

        <div class="col-sm-3 col-6 stats_info counter_grid">
            <i class="far fa-<?if($arItem["PROPERTIES"]['LABEL']['VALUE']):?><?echo $arItem["PROPERTIES"]['LABEL']['VALUE']?><?endif;?>"></i>
            <p class="counter">
                <?if($arItem["PROPERTIES"]['COUNT']['VALUE']):?><?echo $arItem["PROPERTIES"]['COUNT']['VALUE']?><?endif;?>
            </p>
            <h4><?=$arItem['NAME'];?></h4>
        </div>

        <?endforeach;?>
    </div>
</div>
