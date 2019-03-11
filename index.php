<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><section class="banner-bottom-wthree py-lg-5 py-md-5 py-4" id="about">

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "feature_list",
    array(
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
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "OLEE",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
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
        "PROPERTY_CODE" => array(
            0 => "PROGRESS",
            1 => "STYLE",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "feature_list"
    ),
    false
);?>
 </section>
<!--// ab --> <!-- /services --> <section class="services py-md-5 py-4" id="services">

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "skill_list",
        array(
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
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "7",
            "IBLOCK_TYPE" => "OLEE",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
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
            "PROPERTY_CODE" => array(
                0 => "LABEL",
                1 => "SECTION",
                2 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "skill_list"
        ),
        false
    );?>
 </section>
<!-- //services --> <!-- /experience --> <section class="experience py-lg-5 py-4" id="experience">
<div class="timeline py-lg-5 py-3">
	<h4 class="sub-tittle-w3 text-uppercase text-center">Experience</h4>
	<h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center">Job &amp; Education</h3>
	<div id="my-timeline">
	</div>
</div>
 </section>
<!-- //experience --> <!--gallery  --> <section class="gallery py-md-5 py-3" id="projects">

    <?$APPLICATION->IncludeComponent("bitrix:news.list", "project_list", Array(
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
        "IBLOCK_ID" => "5",	// Код информационного блока
        "IBLOCK_TYPE" => "OLEE",	// Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
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
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
        "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",	// Устанавливать статус 404
        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
        "SHOW_404" => "N",	// Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
    ),
        false
    );?>
 </section>
<!-- //gallery --> <!--/stats--> <section class="stats py-lg-5 py-4" id="stats">

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "counter_list",
        array(
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
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "8",
            "IBLOCK_TYPE" => "OLEE",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
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
            "PROPERTY_CODE" => array(
                0 => "COUNT",
                1 => "LABEL",
                2 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "counter_list"
        ),
        false
    );?>
 </section>



<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "comment_list",
    array(
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
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "OLEE",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
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
        "PROPERTY_CODE" => array(
            0 => "AVTOR",
            1 => "AVTOR_STATE",
            2 => "",
            3 => "",
            4 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "comment_list"
    ),
    false
);?>


<!--//stats--> <!-- /testimonials -->
<div class="testimonials py-lg-5 py-4" id="clients">
	<div class="testimonials-inner container py-lg-4 py-3">
		<h4 class="sub-tittle-w3 text-uppercase text-center">Testimonials</h4>
		<h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center">What They Says</h3>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="testimonials_grid center">
						<div class="testimonials_grid-inn text-uppercase">
 <i class="fas fa-quote-left"></i>
							<p>
								 Lorem ipsum dolor sit amet,Maecenas interdum magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.
							</p>
						</div>
						<h3>Gretchen </h3>
 <label>United States</label>
					</div>
				</div>
				<div class="carousel-item">
					<div class="testimonials_grid text-center">
						<div class="testimonials_grid-inn text-uppercase">
 <i class="fas fa-quote-left"></i>
							<p>
								 Lorem ipsum dolor sit amet,Maecenas interdum magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.
							</p>
						</div>
						<h3>Anne Marc </h3>
 <label>United States</label>
					</div>
				</div>
				<div class="carousel-item">
					<div class="testimonials_grid">
						<div class="testimonials_grid-inn text-uppercase">
 <i class="fas fa-quote-left"></i>
							<p>
								 Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.
							</p>
						</div>
						<h3>Harry Baker </h3>
 <label>United States</label>
					</div>
				</div>
 <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="fas fa-long-arrow-alt-left"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next"> <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
			</div>
		</div>
	</div>
</div>





 <!-- //testimonials --> <!-- /Contact--> <section class="contact py-lg-5 py-md-5 py-3" id="contact">
<div class="container">
	<div class="inner-sec-w3ls py-lg-5 py-3">
		<h4 class="sub-tittle-w3 text-uppercase text-center">Find Me</h4>
		<h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center text-white">Contact Me Now</h3>
		<div class="contact_grid_right">
			<form action="#" method="post">
				<div class="row contact_left_grid">
					<div class="col-md-6 con-left" data-aos="fade-up">
						<div class="form-group">
 <input class="form-control" type="text" name="Name" placeholder="" required="">
						</div>
						<div class="form-group">
 <input class="form-control" type="email" name="Email" placeholder="" required="">
						</div>
						<div class="form-group">
 <input class="form-control" type="text" name="Subject" placeholder="" required="">
						</div>
					</div>
					<div class="col-md-6 con-right" data-aos="fade-up">
						<div class="form-group">
 <textarea id="textarea" placeholder="" required=""></textarea>
						</div>
					</div>
					<div class="sub-honey mx-auto mt-3">
 <input class="form-control" type="submit" value="Submit">
					</div>
				</div>
			</form>
		</div>
		<div class="address row mt-lg-5">
			<div class="col-md-4 address-grid" data-aos="flip-up">
				<div class="address-info">
					<div class="address-left text-center">
 <i class="far fa-map"></i>
					</div>
					<div class="address-right text-center">
						<h6 class="my-3">Address</h6>
						<p>
							 California, USA
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 address-grid" data-aos="flip-up">
				<div class="address-info">
					<div class="address-left text-center">
 <i class="far fa-envelope"></i>
					</div>
					<div class="address-right text-center">
						<h6 class="my-3">Email</h6>
						<p>
							 Email : <a href="mailto:example@email.com"> mail@example.com</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 address-grid" data-aos="flip-up">
				<div class="address-info">
					<div class="address-left text-center">
 <i class="fas fa-mobile-alt"></i>
					</div>
					<div class="address-right text-center">
						<h6 class="my-3">Phone</h6>
						<p>
							 +1 234 567 8901
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section>
    <!-- //Contact --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>