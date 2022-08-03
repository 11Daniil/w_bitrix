<?php
\Bitrix\Main\Page\Asset::getInstance()->addJs('https://code.jquery.com/jquery-3.6.0.min.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js');
// \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/local/templates/test/min.js');
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	<?$APPLICATION->ShowHead()?>
</head>
<body class="conteiner">
<?$APPLICATION->ShowPanel();?> 
<header>
    <div class="header">
    	<a href="/">
            <svg width="39" height="32" viewBox="0 0 39 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 29.6765C23.5533 29.6765 29.6765 23.5533 29.6765 16C29.6765 8.44668 23.5533 2.32352 16 2.32352C8.44671 2.32352 2.32355 8.44668 2.32355 16C2.32355 23.5533 8.44671 29.6765 16 29.6765Z" stroke="#4B4F53" stroke-width="3"/>
                <path d="M34.5294 23.9412H32.7647V31H34.5294V23.9412Z" fill="#4B4F53"/>
                <path d="M38.0588 23.9412H36.2941V31H38.0588V23.9412Z" fill="#4B4F53"/>
            </svg>
        </a>

	<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main_menu",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		),
		false
	);?>
    </div>
</header>
		