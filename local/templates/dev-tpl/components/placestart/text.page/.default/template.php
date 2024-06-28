<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>
<section class="news-detail detail-page">
	<div class="detail-page__content">
		<section class="text-page">
			<? $APPLICATION->IncludeComponent(
				"sprint.editor:blocks",
				"custom",
				[
					"ELEMENT_ID" => $arParams["ELEMENT"],
					"IBLOCK_ID" => $arParams["IBLOCK"],
					"PROPERTY_CODE" => $arParams["CONTENT_PROPERTY_CODE"],
				]
			); ?>
		</section>
	</div>
</section>