<div class="news1">
	<?php
	foreach ($arResult['ITEMS'] as $item)
	{
		?>
		<a class="flex1" href="/novosti/<?= $item['CODE'] ?>/">
			<div class="news">
				<?= $item['NAME'] ?>	
				<p class="news-list"><?= $item['PREVIEW_TEXT'] ?></p>
				<div class="date_stile">
					<?
					$arParams["DATE_CREATE"]="j F Y";
					echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($item['DATE_CREATE'], CSite::GetDateFormat()));
					?>						
				</div>
			</div>
		</a>
		<?php
	}
	?>
</div>

<?php
