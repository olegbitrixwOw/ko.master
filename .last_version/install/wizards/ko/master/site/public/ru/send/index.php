<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сообщение отправлено.");
$arEventFields = array(
    "NAME"                  => $_GET["fio"],
    "PHONE"             => $_GET["tel"]

    );

CEvent::Send("callback", "s1", $arEventFields);
?>
<a href="javascript:history.back(-1);"> >> Назад</a>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>