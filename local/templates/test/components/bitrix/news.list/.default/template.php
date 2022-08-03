<div class="news__">
	<?php
	foreach ($arResult['ITEMS'] as $item)
	{
		?>
		<a href="/novosti/<?= $item['CODE'] ?>/">
			<div class="news__item">
				<?= $item['NAME'] ;?>
				<p class="news-list"><?= $item['PREVIEW_TEXT'] ?></p>
				<?
				$arParams["DATE_CREATE"]="j F Y";
				echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($item['DATE_CREATE'], CSite::GetDateFormat()));
				?>
			</div>
		</a>
		<?php
	}
	?>
</div>
<?php
echo $arResult['NAV_STRING'];

