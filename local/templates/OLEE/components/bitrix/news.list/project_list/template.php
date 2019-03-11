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
<div class="gallery-inner container py-md-5 pb-3">
    <h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center"><?=$arResult['NAME'];?></h3>
    <div class="row">

<? $i=1;?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
        <? if($i==1):?>

        <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
<?endif;?>
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
            <div class="section_1_gallery_grid">
                <a title="<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                    <div class="section_1_gallery_grid1">
                        <img alt=" " src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-fluid">
                        <div class="proj_gallery_grid1_pos">
                            <h3><?echo $arItem["NAME"]?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <?endif;?>
                <? $i++;?>
                <? if($i==4):?>
        </div>
    <? $i=1;
    endif;?>

        <?endforeach;?>



    </div>
    <!-- //gallery container -->
</div>
