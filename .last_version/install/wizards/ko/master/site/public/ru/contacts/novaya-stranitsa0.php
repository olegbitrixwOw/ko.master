<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("����� ��������");
?><?$APPLICATION->IncludeComponent("bitrix:main.feedback", "contacts", Array(
	"EMAIL_TO" => "zakaz@ko25.ru",	// E-mail, �� ������� ����� ���������� ������
		"EVENT_MESSAGE_ID" => array(	// �������� ������� ��� �������� ������
			0 => "7",
		),
		"OK_TEXT" => "�������, ���� ��������� �������.",	// ���������, ��������� ������������ ����� ��������
		"REQUIRED_FIELDS" => array(	// ������������ ���� ��� ����������
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",	// ������������ ������ �� �������������� ��������� (CAPTCHA) ��� ���������������� �������������
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>