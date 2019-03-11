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
<?
$content=[];
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?if(!$content[$arItem["PROPERTIES"]['SECTION']['VALUE']]):
$content[$arItem["PROPERTIES"]['SECTION']['VALUE']]=[];
endif;
array_push($content[$arItem["PROPERTIES"]['SECTION']['VALUE']], $arItem);
?>

<?endforeach;?>
<?foreach($content as $Item):?>
<?foreach($Item as $element):?>

    <?endforeach;?>
<?endforeach;?>
<div class="container">
    <div class="inner-sec-w3ls py-md-5 py-4">
        <h4 class="sub-tittle-w3 text-uppercase text-center"><?=$arResult['DESCRIPTION'];?></h4>
        <h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center text-white"><?=$arResult['NAME'];?></h3>
        <div class="price-right">
            <div class="tabs">
                <ul class="nav nav-pills my-md-5 my-3 justify-content-center" id="pills-tab" role="tablist">
                    <?$i=0?>
                    <?foreach($content as $key => $Item):?>

                    <li class="nav-item"> <a class="nav-link <?if($i==0):?>active<?endif;?>" id="pills-<?=$key?>-tab" data-toggle="pill" href="#pills-<?=$key?>" role="tab" aria-controls="pills-<?=$key?>" aria-selected="<?if($i==0):?>true<?else:?>false<?endif;?>"><?=$key?></a> </li>
<?$i++?>
                    <?endforeach;?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <?$i=0?>
                    <?foreach($content as $key => $Item):?>

                    <div class="tab-pane fade <?if($i==0):?>show active<?endif;?>" id="pills-<?=$key?>" role="tabpanel" aria-labelledby="pills-<?=$key?>-tab">
                        <div class="menu-grids mt-4">
                            <div class="row t-in">

                                <?foreach($Item as $element):?>

                                <div class="col-lg-4 service-in text-center" data-aos="flip-up">
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="fas <?if($element["PROPERTIES"]['LABEL']['VALUE']):?>fa-<?echo $element["PROPERTIES"]['LABEL']['VALUE']?><?endif;?> mb-4"></i>
                                            <h5 class="card-title text-uppercase"><?=$element['NAME']?></h5>
                                            <p class="card-text">
                                                <?if($element["DISPLAY_PREVIEW_TEXT"]!="N" && $element["PREVIEW_TEXT"]):?>
                                                    <?echo $element["PREVIEW_TEXT"];?>
                                                <?endif;?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <?endforeach;?>

                            </div>
                        </div>
                    </div>
                        <?$i++?>
<?endforeach;?>

                </div>
            </div>
        </div>
    </div>
</div>

