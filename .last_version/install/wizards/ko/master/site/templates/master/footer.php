			<?
			if ($curPage != SITE_DIR."index.php")
			{
			?>
       

                        </div>
                    </div>
                    <div class="col-md-8 col-lg-6 col-md-pull-16 col-lg-pull-18">
                        <div class="aside">

<?$APPLICATION->IncludeComponent("bitrix:menu", "leftmenu", Array(
	"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"MAX_LEVEL" => "4",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"COMPONENT_TEMPLATE" => ".default",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"left_news",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#NEWS_IBLOCK_ID#",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>                            
                            
                            
                            <div class="aside-banner hidden-xs hidden-sm">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/banner.php",
	Array(),
	Array("MODE"=>"html")
);?>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
            </div>
            <div class="push20"></div>
        </div>
        
<?}?>        
        <div class="footer-push"></div>
    </div>
    <div class="footer-wrapper">
        <div class="container">
            <div class="footer">
                <div class="text-center">
                    <div class="copyright f13">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/copyright.php",
	Array(),
	Array("MODE"=>"html")
);
?>

</div>
                </div>
            </div>
        </div>
    </div>
    <span id="up"><i class="fa fa-angle-up"></i></span>
    <div class="modal" id="callback">
        <div class="title-h2"><?echo GetMessage("CALL2");?></div>
        <br />
        <div class="rf">
			<form name="item" action="/send/">
                <div class="row">
                    <div class="col-sm-24">
                        <div class="form-group">
                            <label class="label" for="fio"><?echo GetMessage("NAME");?></label>
                            <input type="text" name="fio" id="fio" class="form-control person" placeholder="Ваше имя" />
                        </div>
                    </div>
                    <div class="col-sm-24">
                        <div class="form-group">
                            <label class="label" for="tel"><?=$MESS["TEL"];?>*</label>
                            <input type="text" name="tel" id="tel" class="form-control tel required" placeholder="Телефон*" />
                        </div>
                    </div>
                </div>
                <p><span class="red">*</span> <span class="f12"><?echo GetMessage("FIELD");?></span></p>
                <div>
                    <input type="submit" class="btn btn" value="<?echo GetMessage("SEND");?>" />
                </div>
            </form>
        </div>
    </div>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src='<?=SITE_TEMPLATE_PATH?>/js/modernizr.js'></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/slick.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/plugins-scroll.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/lightgallery-all.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/onReady.js"></script>
</body>
</html>