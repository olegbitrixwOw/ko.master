<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("����� ��������");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "section", Array(
	"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"COUNT_ELEMENTS" => "N",	// ���������� ���������� ��������� � �������
		"IBLOCK_ID" => "2",	// ��������
		"IBLOCK_TYPE" => "products",	// ��� ���������
		"SECTION_CODE" => "",	// ��� �������
		"SECTION_FIELDS" => array(	// ���� ��������
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",	// ID �������
		"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
		"SECTION_USER_FIELDS" => array(	// �������� ��������
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",	// ���������� �������� �������
		"TOP_DEPTH" => "1",	// ������������ ������������ ������� ��������
		"VIEW_MODE" => "TILE",	// ��� ������ �����������
		"COMPONENT_TEMPLATE" => "main",
		"HIDE_SECTION_NAME" => "N",	// �� ���������� �������� �����������
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>