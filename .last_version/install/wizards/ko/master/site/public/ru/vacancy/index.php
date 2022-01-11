<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?>
    <div class="content">
                                <h2><span class="red">Почему стоит</span> работать в «Мастер на все руки»</h2>
                                <div class="push5"></div>
                                <div class="job-why">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon14.png" />
                                                <div class="title bold black f18">
                                                    Стабильность компании
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    Трудоустройство по ТК РФ, официальная заработная плата без задержек 2 раза в месяц, 
                                                    стабильная работа при любых	условиях рынка труда.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon15.png" />
                                                <div class="title bold black f18">
                                                    Карьерный рост
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    Все возможности для начала успешной карьеры и отличные перспективы для профессионалов. 
                                                    Мы открываем неограниченные возможности для самореализации — 
                                                    как в профессии, так и в творчестве.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon16.png" />
                                                <div class="title bold black f18">
                                                    Коллектив
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    Молодой, дружный коллектив, сильная команда, насыщенная корпоративная жизнь - 
                                                    все эти составляющие позволяют нам работать с удовольствием!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="element relative">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/images/icon17.png" />
                                                <div class="title bold black f18">
                                                    Вознаграждение
                                                </div>
                                                <div class="push8"></div>
                                                <div class="text">
                                                    У нас есть возможность зарабатывать больше, если работать лучше 
                                                    и сделать стремительную карьеру, если ты лидер.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="push10"></div>
                                    <hr />
                                </div>
                                
                                
                                <div class="title-h2">Вакансии</div>
                                



<?$APPLICATION->IncludeComponent("bitrix:news.list", "vacancy", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "#VACANCY_IBLOCK_ID#",	// Код информационного блока
		"IBLOCK_TYPE" => "vacancies",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "ZRP",
			1 => "TR",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<div class="push45"></div>
                                <div class="manager">
                                    <div class="title-h2"><span class="red">Контакты менеджеров</span> по персоналу</div>
                                    <p>Подробная информация по телефонам:</p>
                                    <div class="f16 bold black">
                                        +7 (123) 456-78-90 — Светлана
                                    </div>
                                    <div class="push10"></div>
                                    <div class="f16 bold black">
                                        +7 (123) 456-78-91 — Яна
                                    </div>
                                </div>
                                
                                
                                
                            </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
