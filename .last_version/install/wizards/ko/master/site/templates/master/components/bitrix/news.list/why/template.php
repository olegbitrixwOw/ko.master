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
        <div class="advantages-wrapper">
            <div class="container">
                <div class="black title-h1">������ ��</div><br />
                <div class="row text-center">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

   <div class="col-xs-12 col-sm-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="advantages-element">
                            <div class="img-wrapper">
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
                            </div>
                            <h5 class="black"><?=$arItem["NAME"]?></h5>
                        </div>
                    </div>
<?endforeach;?>

</div>
</div>
</div>
