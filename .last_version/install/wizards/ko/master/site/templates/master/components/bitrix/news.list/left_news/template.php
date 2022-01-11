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
                            <div class="aside-block aside-latest-post">

                                <div class="title">Последние новости</div>
                                <div class="inner">


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

 <div class="element relative" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                        <div class="img-wrapper">

											<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img style="width:100px" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="latest post1"></a>
                                        </div>
                                        <div class="element-content">
                                            <div class="date gray"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
                                            <div class="text">

<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                                            </div>
                                        </div>
                                    </div>



<?endforeach;?>

</div>
</div>