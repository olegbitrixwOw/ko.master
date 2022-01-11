<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
                            <div class="aside-block">
                                <div class="title hidden-xs hidden-sm">Категории</div>
                                <nav class="aside-menu">
                                    <div class="aside-menu-title visible-xs visible-sm">
                                        О компании
                                    </div>

                                    <div class="uMenuH">

<ul>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="uMenuItemA"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
</div>
</nav>
</div>
<?endif?>