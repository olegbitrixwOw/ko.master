<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
                             <div class="news-list">
                                <div id="allEntries">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('NEWS_DELETE_CONFIRM')));

$i++;
?>



                                    <div id="entryID<?=$i?>"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                        <div class="news-element relative">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="img-wrapper relative">
                                                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">

   <div class="element-img" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) 50% 50% no-repeat; background-size: cover;"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-18">
                                                    <div class="element-content">
                                                        <h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
                                                        <div class="element-info">
                                                            <span class="news-date">
                                                                <i class="fa fa-calendar-o" aria-hidden="true"></i> <?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
                                                            </span>
                                                            <span class="e-category">
                                                                <i class="fa fa-folder" aria-hidden="true"></i> <a href="#">Акции компании</a>
                                                            </span> 
                                                            <span class="e-reads">
                                                                <i class="fa fa-eye" aria-hidden="true"></i> 79
                                                            </span>
                                                            <span class="e-comments">
                                                                <i class="fa fa-comments" aria-hidden="true"></i> <a href="#comments">0</a>
                                                            </span> 
                                                        </div>
                                                        <div class="text">
                 <?=$arItem["PREVIEW_TEXT"]?>                                        </div>
                                                        <div class="push20"></div>
                                                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn mini">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





<?endforeach;?>

								 </div>
</div>