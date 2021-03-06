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
<div class="container">
    <div class="inner-sec-w3ls py-lg-5 py-4">
        <h4 class="sub-tittle-w3"><br>
        </h4>
        <h4 class="sub-tittle-w3"><?=$arResult['DESCRIPTION'];?></h4>
        <h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3"><?=$arResult['NAME'];?></h3>
        <div class="row mt-lg-5 mt-3">

            <? $i=1;?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <? if($i==1):?>

            <div class="col-lg-4 progress-info-content text-left">
                <?endif;?>


                <div class="progress-one my-lg-5" data-aos="fade-up">
                    <h4 class="progress-tittle-w3"><?echo $arItem["NAME"]?></h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped <?if($arItem["PROPERTIES"]['STYLE']['VALUE']):?>bg-<?echo $arItem["PROPERTIES"]['STYLE']['VALUE']?><?endif;?>" role="progressbar" style="width: <?if($arItem["PROPERTIES"]['PROGRESS']['VALUE']):?><?echo $arItem["PROPERTIES"]['PROGRESS']['VALUE']?><?endif;?>%" aria-valuenow="<?if($arItem["PROPERTIES"]['PROGRESS']['VALUE']):?>bg-<?echo $arItem["PROPERTIES"]['PROGRESS']['VALUE']?><?endif;?>" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>

                <? $i++;?>
                <? if($i==3):?>
            </div>
        <? $i=1;
        endif;?>
<?endforeach;?>
            <? if($i!==3):?>
        </div>
        <?
        endif;?>

        </div>
    </div>
</div>
