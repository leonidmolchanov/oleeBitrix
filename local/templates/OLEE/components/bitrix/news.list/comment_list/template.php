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
<div class="testimonials py-lg-5 py-4" id="clients">
    <div class="testimonials-inner container py-lg-4 py-3">
        <h4 class="sub-tittle-w3 text-uppercase text-center"><?=$arResult["DESCRIPTION"]?></h4>
        <h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center"><?=$arResult["NAME"]?></h3>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
<?$i=0;?>
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <div class="carousel-item <?if($i==0):?>active<?endif;?>">
                    <div class="testimonials_grid center">
                        <div class="testimonials_grid-inn text-uppercase">
                            <i class="fas fa-quote-left"></i>
                            <p>
                                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                    <?echo $arItem["PREVIEW_TEXT"];?>
                                <?endif;?>                            </p>
                        </div>
                        <h3><?if($arItem["PROPERTIES"]['AVTOR']['VALUE']):?><?echo $arItem["PROPERTIES"]['AVTOR']['VALUE']?><?endif;?></h3>
                        <label><?if($arItem["PROPERTIES"]['AVTOR_STATE']['VALUE']):?><?echo $arItem["PROPERTIES"]['AVTOR_STATE']['VALUE']?><?endif;?></label>
                    </div>
                </div>
                <?$i++?>
                <?endforeach;?>
                <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="fas fa-long-arrow-alt-left"></span> <span class="sr-only">Назад</span> </a> <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next"> <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span> <span class="sr-only">Далее</span> </a>
            </div>
        </div>
    </div>
</div>

