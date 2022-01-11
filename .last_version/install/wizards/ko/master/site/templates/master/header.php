<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$curPage = $APPLICATION->GetCurPage(true);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width,initial-scale=1.0 maximum-scale=1.0, user-scalable=0" name="viewport" >
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<?$APPLICATION->ShowHead();?>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap24.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/lightgallery.min.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body class="base-template">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div id="preloader"></div>
    <a href="#" class="menu-btn">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </a>
    <div class="overlay"></div>
    <div class="mobile-menu">
        <div class="uMenuH">

<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel1", array(
	"ROOT_MENU_TYPE" => "top",
	"MAX_LEVEL" => "3",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>


        </div>
        <div class="cleaner"></div>
    </div>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="relative">
                        <div class="slogan upper">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/slogan.php",
	Array(),
	Array("MODE"=>"html")
);
?>
</div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="relative">
                        <div class="logo upper">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/logo.php",
	Array(),
	Array("MODE"=>"html")
);
?>
                        </div>
                        <!--
                        <div class="logo logo-img">
                            <a href="/"><img src="images/logo.png" /></a>
                        </div>
                        -->
                        
                        
                        <div class="header-tel relative">
                            <i class="fa fa-phone"></i> 
                            <div class="element">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/phone.php",
	Array(),
	Array("MODE"=>"html")
);
?>
                            </div>
                            <div class="push5 visible-xs"></div>
                            <div class="element">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/phonemob.php",
	Array(),
	Array("MODE"=>"html")
);
?>
                            </div>
                            <div class="push20 visible-xs visible-sm"></div>
                        </div>
                        
                        
                        <div class="header-btn-wrapper">
                            <a href="#callback" class="btn fancybox"><?echo GetMessage("CALL")?></a>
                        </div>
                        <div class="slogan2 text-right kelson black">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/work.php",
	Array(),
	Array("MODE"=>"html")
);
?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu-wrapper-push"></div>
            <div class="top-menu-wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-24 col-md-18 col-lg-17">
                                <div class="uMenuH">


<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
                                </div>
                                <div class="cleaner"></div>
                            </div>
                            <div class="col-xs-24 col-md-6 col-lg-7">
                                <div class="search-box-wrapper">
                                    <div class="search-btn"><i class="fa fa-search"></i></div>
                                    <div class="search_box">
                                        <form onsubmit="this.sfSbm.disabled=true" method="get" action="/search/">
                                            <div class="form-group relative">
                                                <div class="schQuery">
                                                    <input type="text" name="q" maxlength="30" class="queryField" placeholder="Поиск по сайту">
                                                </div>
                                                <div class="schBtn">
                                                    <input type="submit" class="searchSbmFl" name="sfSbm" value="Найти" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
			<?
			if ($curPage != SITE_DIR."index.php")
			{
			?>
        
        <div class="middle">
            <div class="push40"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-16 col-lg-18 col-md-push-8 col-lg-push-6">
                        <div class="main-column">
                            <div class="push10 visible-md visible-lg"></div>
<h1 id="pagetitle" class="black"><?$APPLICATION->ShowTitle(false);?></h1>
<?}?>