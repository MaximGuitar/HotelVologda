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
use \Placestart\Utils;
?>
<section class="seeAllPhoto" x-data="gallerySlider">

	<div class="seeAllPhoto__descr">
		<p>Локация 10 из 10, мы расположены в самом центре города. При этом, само здание расположено в тихом уютном
			дворике, вдали от городского шума. По уровню отделки и наполнению номерного фонда мы соответствуем гостинице
			4–5 звёзд.</p>
	</div>
	<div class="seeAllPhoto__list">
		<div class="swiper" x-ref="reviewSwiper">
			<div class="swiper-wrapper" x-data="FancyboxGallery">
				<? foreach ($arResult["ITEMS"] as $arItem): ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
						<a data-fancybox="gallery" class="swiper-slide img-container seeAllPhoto__slide"
							href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="seeAllPhoto__item "
							id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
							<?
							$img = Utils::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 443, 323, 'exact', 95);
							?>
							<img src="<?=$img["SRC"] ?>" alt="<?= $arItem["NAME"] ?>" />
						</a>
					<? endif ?>
				<? endforeach; ?>
			</div>
		</div>
	</div>
	<!-- <a href="/about-us/galereya.php" class="btn-right-arr btn-right-arr--black seeAllPhoto__seePhoto">
		<p>Смотреть все фото</p>
		<div class="btn-right-arr__circle">
			<svg>
				<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
			</svg>
		</div>
	</a> -->
</section>