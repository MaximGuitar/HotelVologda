<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="special-offers__elems">
	<?php
	foreach ($arResult["ITEMS"] as $arItem): ?>
		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="special-offers__card">
			<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
				class="special-offers__img">
			<div class="special-offers__subtitle">
				<p>
					<?= $arItem["DISPLAY_PROPERTIES"]["LEFT_TEXT"]["VALUE"] ?>
				</p>
				<svg class="special-offers__icon">
					<use xlink:href='<?= SPRITE_PATH ?>#static-birka'>
					</use>
				</svg>
			</div>
			<div class="special-offers__card-title">
				<p>
					<?= $arItem["NAME"] ?>
				</p>
			</div>
		</a>
	<?php endforeach ?>
</div>