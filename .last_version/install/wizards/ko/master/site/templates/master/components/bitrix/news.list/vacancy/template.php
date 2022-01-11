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
                                <div class="push5"></div>
                                <div class="accordeon invert">


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
$i++;
if($i==1){
	?>

                                    <div class="element active"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
										<?}else{?>
                                   <div class="element"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">

										<?}?>
                                        <div class="title">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <?echo $arItem["NAME"]?>
                                                </div>
                                                <div class="col-sm-12 text-right-sm">
                                                <?echo $arItem["PROPERTIES"]["ZRP"]["VALUE"]?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-content">
                                            <div class="push10"></div>
                                            <div class="row content">
                                                <div class="col-sm-12">
                                                   <?echo $arItem["PREVIEW_TEXT"]?>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="bold black f18">Требования</div>
                                                    <div class="push5"></div>
 <?echo htmlspecialcharsBack($arItem["PROPERTIES"]["TR"]["VALUE"]["TEXT"])?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





<?endforeach;?>

</div>
