<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

                            <div class="article-img">

<img src="<?=$arResult["PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" />
                            </div>

<?=$arResult["DESCRIPTION"]?><br />
<?
	//echo print_r($arResult);
?>
                            <div class="art-gallery lightgallery">
                                <div class="push20"></div>
                                <div class="row">
                            





<?
foreach($arResult["ITEMS"] as $cell=>$arElement):
	$width = 0;
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CATALOG_ELEMENT_DELETE_CONFIRM')));
?>


 <div class="col-xs-12 col-sm-4 col-md-8 col-lg-4" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
                                        <div class="element relative">

<a href="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" class="lightgallery-link relative" data-sub-html="Текстовое описание изображения 1">

 <div class="element-img" style="background: url(<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>) 50% 50% no-repeat; background-size: cover;"></div>

</a>
                                        </div>
                                    </div>



<?
endforeach; // foreach($arResult["ITEMS"] as $arElement):
?>

</div>
</div>
