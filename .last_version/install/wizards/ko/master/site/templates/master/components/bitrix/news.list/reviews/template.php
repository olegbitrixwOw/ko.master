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
                    <div class="col-md-offset-1 col-md-7 col-lg-6">
                        <div class="aside">
                            <div class="aside-reviews-block">

<div class="black title-h3"><i class="fa fa-comments"></i> Последние отзывы</div>
                                <div class="post-comments" id="comments">
                                    <div class="quip">
                                        <div id="quip-topofcomments-qcom"></div>
                                        
                                        <ol class="quip-comment-list">


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

                               <div class="aside-reviews-element" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

<div class="title-h4 black"><?=$arItem["NAME"]?></div>

<div class="review-date"><i class="fa fa-calendar-o"></i><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
                                                <div class="introtext">

<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
<?=$arItem["PREVIEW_TEXT"]?>
</a>
                                                </div>
                                            </div>


<?endforeach;?>
										</ol>
</div>
</div>
</div>
</div>
</div>
