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

<section class="services <?= $theme = $page != "/" ? "services--section" : "" ?>">
	<div class="container">
		<? $page = $APPLICATION->GetCurPage(); ?>
		<?php if ($page != "/"): ?>
			<div class="page-header services__title">Наши услуги</div>
		<?php endif; ?>
		<div class="services__list">
			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<a  <?=$arItem['PROPERTIES']["ACESS_DENIED"]['VALUE']?"@click=\"openAcessModal = ! openAcessModal,modalAcessText='".$arItem["NAME"]."' \":class=\"{'active':openAcessModal}\"":'href="'.$arItem["DETAIL_PAGE_URL"].'"' ?>  class="services__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
						<div class="img-container services__item-img">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
								title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
						</div>
					<? endif ?>
					<div class="services__item-title">
						<?= $arItem["NAME"] ?>
					</div>
					<div class="btn-right-arr btn-right-arr--white services__open">
						<p>Подобнее</p>
						<div class="btn-right-arr__circle">
							<svg>
								<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
							</svg>
						</div>
					</div>

				</a>
			<? endforeach; ?>
		</div>
		<?php if ($page == "/"): ?>
			<div class="services__subtitle">
				<p>Наши услуги <span class="wavy">для вас</span></p>
			</div>
		<?php endif; ?>
	</div>
</section>