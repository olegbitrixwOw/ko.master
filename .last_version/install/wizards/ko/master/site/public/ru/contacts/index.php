<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="col-lg-12">

                                        <div class="contacts-content">
                                            <div class="title-h2"></div>
                                            <div class="element relative">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>

                                                <div class="title bold black">Адрес</div>

<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/adress.php",
	Array(),
	Array("MODE"=>"html")
);
?> 
                                            </div>
                                            <div class="push15"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="element relative">
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                        <div class="title bold black">Телефон</div>

<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/contact_phone.php",
	Array(),
	Array("MODE"=>"html")
);?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="element relative">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        <div class="title bold black">Режим работы</div>
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/contact_work.php",
	Array(),
	Array("MODE"=>"html")
);?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="push15"></div>
                                            <div class="element relative">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <div class="title bold black">Email</div>

<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/contact_email.php",
	Array(),
	Array("MODE"=>"html")
);?>
                                            </div>
                                            <div class="push30"></div>
                                        </div>
                                    </div>
                                  <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"contacts",
	Array(
		"EMAIL_TO" => "zakaz@ko25.ru",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?>

                            <div class="map-wrapper">
                             
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/map.php",
	Array(),
	Array("MODE"=>"html")
);?>
                            </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>