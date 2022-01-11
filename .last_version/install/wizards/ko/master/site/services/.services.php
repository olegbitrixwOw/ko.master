<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(

	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"files.php", // Copy bitrix files
			"template.php", // Install template

			"settings.php",
		),
	),
	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"news.php",
			"license.php",
			"servicesm.php",
			"vacancies.php",
			"partners.php",
			"partnersm.php",
			"portfolio.php",
			"price.php",
			"reviews.php",
			"slider.php",
			"team.php",
			"why.php",
		),
	),
);
?>