<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������� ����������.");
$arEventFields = array(
    "NAME"                  => $_GET["fio"],
    "PHONE"             => $_GET["tel"]

    );

CEvent::Send("callback", "s1", $arEventFields);
?>
<a href="javascript:history.back(-1);"> >> �����</a>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>