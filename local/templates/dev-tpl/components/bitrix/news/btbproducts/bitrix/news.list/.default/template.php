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

<section class="B2Bsolutions" x-data={activeImg:0}>
	<img src="<?= SITE_TEMPLATE_PATH ?>/src/images/bg-btb.jpg" class="B2Bsolutions__bg-img" alt="">
	<div class="container B2Bsolutions__cont">
		<div class="B2Bsolutions__title">
			<p>b2b решения</p>
		</div>
		<div class="B2Bsolutions__list">
			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="B2Bsolutions__item"
					id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="B2Bsolutions__item-title">
						<p>
							<?= $arItem["NAME"] ?>
						</p>
					</div>
					<div class="B2Bsolutions__item-text">
						<?= $arItem["PREVIEW_TEXT"] ?>
					</div>
					<div class="btn-right-arr btn-right-arr--black B2Bsolutions__read-all">
						<p>Почитать подобнее</p>
						<div class="btn-right-arr__circle">
							<svg>
								<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
							</svg>
						</div>
					</div>
					<? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
						<div class="img-container B2Bsolutions__item-img">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
								title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
						</div>
					<? endif ?>
				</a>
			<? endforeach; ?>
		</div>

	</div>
</section>