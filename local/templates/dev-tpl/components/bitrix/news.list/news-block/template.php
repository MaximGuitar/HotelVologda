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
<section class="news-block">
	<div class="container">
		<?php if ($arParams["TEST_CHEKBOX"] === "Y"): ?>
			<div class="news-block__title news-block__title--text">
				<div class="news-block__line"></div>
				<p class="news-block__title-text news-block__title-text--text-page">Читайте также:</p>
			</div>
		<? else: ?>
			<div class="news-block__title">
				<p class="news-block__title-text">Новости</p>
				<a href="/about-us/news.php" class="btn-right-arr btn-right-arr--black news-block__see-all">
					<p>Смотреть все</p>
					<div class="btn-right-arr__circle">
						<svg>
							<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
						</svg>
					</div>
				</a>
			</div>
		<? endif ?>

		<div class="news-block__list">
			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news-block__item"
					id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
						<div class="img-container news-block__item-img">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
								title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
						</div>
					<? endif ?>
					<div class="news-block__item-title">
						<p>
							<?= $arItem["NAME"] ?>
						</p>
					</div>
					<div class="news-block__date">
						<p>
							<?= $arItem["DISPLAY_ACTIVE_FROM"] ?>
						</p>
					</div>
				</a>
			<? endforeach; ?>
		</div>

	</div>
</section>