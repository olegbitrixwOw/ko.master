<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
?>
    <div class="content">
                                <h2><span class="red">������ �����</span> �������� � ������� �� ��� ����</h2>
                                <div class="push5"></div>
                                <div class="job-why">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon14.png" />
                                                <div class="title bold black f18">
                                                    ������������ ��������
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    ��������������� �� �� ��, ����������� ���������� ����� ��� �������� 2 ���� � �����, 
                                                    ���������� ������ ��� �����	�������� ����� �����.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon15.png" />
                                                <div class="title bold black f18">
                                                    ��������� ����
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    ��� ����������� ��� ������ �������� ������� � �������� ����������� ��� ��������������. 
                                                    �� ��������� �������������� ����������� ��� �������������� � 
                                                    ��� � ���������, ��� � � ����������.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon16.png" />
                                                <div class="title bold black f18">
                                                    ���������
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    �������, ������� ���������, ������� �������, ���������� ������������� ����� - 
                                                    ��� ��� ������������ ��������� ��� �������� � �������������!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon17.png" />
                                                <div class="title bold black f18">
                                                    ��������������
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    � ��� ���� ����������� ������������ ������, ���� �������� ����� 
                                                    � ������� ������������� �������, ���� �� �����.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="push10"></div>
                                    <hr />
                                </div>
                                
                                
                                <div class="title-h2">��������</div>
                                



<?$APPLICATION->IncludeComponent("bitrix:news.list", "vacancy", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"DISPLAY_DATE" => "Y",	// �������� ���� ��������
		"DISPLAY_NAME" => "Y",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// ������
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"IBLOCK_ID" => "#VACANCY_IBLOCK_ID#",	// ��� ��������������� �����
		"IBLOCK_TYPE" => "vacancies",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
		"INCLUDE_SUBSECTIONS" => "N",	// ���������� �������� ����������� �������
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
		"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
		"PAGER_TITLE" => "�������",	// �������� ���������
		"PARENT_SECTION" => "",	// ID �������
		"PARENT_SECTION_CODE" => "",	// ��� �������
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"PROPERTY_CODE" => array(	// ��������
			0 => "ZRP",
			1 => "TR",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// ������������� ��������� ���� ��������
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
		"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
		"STRICT_SECTION_CHECK" => "N",	// ������� �������� ������� ��� ������ ������
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<div class="push45"></div>
                                <div class="manager">
                                    <div class="title-h2"><span class="red">�������� ����������</span> �� ���������</div>
                                    <p>��������� ���������� �� ���������:</p>
                                    <div class="f16 bold black">
                                        +7 (123) 456-78-90 � ��������
                                    </div>
                                    <div class="push10"></div>
                                    <div class="f16 bold black">
                                        +7 (123) 456-78-91 � ���
                                    </div>
                                </div>
                                
                                
                                
                            </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
