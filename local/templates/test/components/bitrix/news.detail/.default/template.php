<!-- <a href="javascript:history.back()" class="back">Назад</a> -->

<div class="block__news__detail">
	<span>
		<h2><? $APPLICATION->ShowTitle(); ?></h2>

	</span>
	<div class="date_stile">
		<?
		$arParams["DATE_CREATE"]="j F Y";
		echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arResult['DATE_CREATE'], CSite::GetDateFormat()));
		?>			
	</div>
	<div class="news-list">
	  	<?echo $arResult["DETAIL_TEXT"];?>
	</div>
</div>