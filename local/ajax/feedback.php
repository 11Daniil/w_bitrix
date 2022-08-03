
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";
CModule::IncludeModule('iblock');
?>

<?php
function validate($validate)
{	
	$requires = ['phone'];
	$phonValidate = preg_match("/^[8?\+7][0-9]{10}$/", $validate['phone']);
	$errors = true;

	foreach($validate as $key => $val)
	{
		if(empty($validate[$key]) && in_array($key, $requires))
			$errors = false;
	}
	if($errors === true)
	{
		// mail($_POST['mail'], 'Тема письма', $_POST);
		$el = new CIBlockElement;
		$iblock_id = 4;

		$PROP = array();
		$PROP['NAME'] = $_POST['name'];  // свойству с кодом 12 присваиваем значение "Белый"
		$PROP['PHONE'] = $_POST['phone'];        // свойству с кодом 3 присваиваем значение 38
		global $USER;

		$arLoadProductArray = Array(		
		  "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
		  "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
		  "PROPERTY_VALUES"=> $PROP,
		  "NAME"           => "Форма",
		  "IBLOCK_ID" => $iblock_id,
		  "ACTIVE"         => "Y",            // активен
		  );

		if($PRODUCT_ID = $el->Add($arLoadProductArray))
		  echo "New ID: ".$PRODUCT_ID;
		else
		  echo "Error: ".$el->LAST_ERROR;
	}
}
?>
