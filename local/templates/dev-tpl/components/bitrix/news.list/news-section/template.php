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
		<div class="news-block__title">
			<p class="news-block__title-text">Новости</p>
		</div>
		<div class="news-block__section-list">
			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news-block__item news-block__item--section"
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