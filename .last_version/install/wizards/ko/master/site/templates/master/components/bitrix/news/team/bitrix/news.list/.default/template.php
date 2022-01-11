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
                          <div class="content">
                                
                                <div class="team">
                                    <div class="row">



<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

         <div class="col-xs-12 col-sm-8 col-md-12 col-lg-8" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                            <div class="element relative text-center">
                                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="absolute"></a>
                                                <div class="img-wrapper">
                                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                                                </div>
                                                <div class="element-content">
                                                    <div class="title">
                                                        <div class="table">
                                                            <div class="table-cell">
                                                               <?=$arItem["NAME"]?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="subtitle">
                                                        <div class="table">
                                                            <div class="table-cell">
                                                          <?=$arItem["PREVIEW_TEXT"]?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




<?endforeach;?>

</div>
</div>
</div>
