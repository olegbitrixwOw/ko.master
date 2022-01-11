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
        <div class="info-wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12"><div class="white title-h2"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Новости</div></div>
					<div class="col-sm-12"><a href="/news/" class="btn mini">Все новости</a></div>
                </div>
                <div class="row">




<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

 <div class="col-sm-8" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="info-element">
                            <div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-wrapper">
                                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
                                    </div>
                                </div>
                                <div class="col-md-18">
                                    <h5 class="white">
<?=$arItem["NAME"]?></h5>
                                </div>
                            </div>
                            <div class="introtext">

<?=$arItem["PREVIEW_TEXT"]?>
                            </div>
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="more upper">Подробнее</a>
                        </div>
                    </div>


<?endforeach;?>

</div>
</div>
</div>