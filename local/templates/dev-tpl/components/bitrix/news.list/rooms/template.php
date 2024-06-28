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



<section class="rooms-section">
	<div class="container">
		<div class="rooms-section__elems">
			<?php
			foreach ($arResult["ITEMS"] as $arItem): ?>
				<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="room-card">
					<div x-data="catalogSlider" class="hover-slider">
						<div class="swiper" x-ref="CatalogSwiper">
							<div class="swiper-wrapper">
								<? $gallery = $arItem["PROPERTIES"]["GALLERY"]["VALUE"]; ?>
								<? foreach ($gallery as $photo): ?>
									<div class="swiper-slide">
										<div class="img-container hover-slider__img">
											<? 
											$img = Utils::resizeImage($photo, 564, 400, 'exact', 95);								
											?>
											<img src="<?= $img['SRC'] ?>" alt="<?= $arItem['NAME'] ?>" class=""  data-lazy>
										</div>
									</div>
								<? endforeach ?>
							</div>
							<div class="swiper-pagination hover-slider__pagintaion" x-ref="pag">

							</div>
							<?php if (count($gallery) > 1): ?>
								<div class="hover-slider__pagintaion-custom"
									style="grid-template-columns:repeat(<?= count($gallery) ?>,1fr);">
									<?php for ($i = 1; $i <= count($gallery); $i++): ?>
										<div class="hover-slider__pagintaion-elem" @mouseenter="SlideTo(<?= $i - 1 ?>)">

										</div>
									<? endfor ?>
								</div>
							<? endif; ?>
						</div>
						<div class="hover-slider__options">
							<? if ($arItem["PROPERTIES"]["LIDER"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-leader leader-label">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-star'>
										</use>
									</svg>
									<p>Лидер продаж</p>
								</div>
							<? endif; ?>
							<? if ($arItem["PROPERTIES"]["WIFI_PROOP"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-elem">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-wifi'>
										</use>
									</svg>
									<div class="popup">
										<p>
											<?= $arItem["PROPERTIES"]["WIFI_PROOP"]["NAME"] ?>
										</p>
										<svg>
											<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
										</svg>
									</div>
								</div>
							<? endif; ?>
							<? if ($arItem["PROPERTIES"]["CONDISH_PROOP"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-elem">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-cold'>
										</use>
									</svg>
									<div class="popup">
										<p>
											<?= $arItem["PROPERTIES"]["CONDISH_PROOP"]["NAME"] ?>
										</p>
										<svg>
											<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
										</svg>
									</div>
								</div>
							<? endif; ?>
							<? if ($arItem["PROPERTIES"]["TWO_BEDS_PROOP"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-elem">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-bed'>
										</use>
									</svg>
									<div class="popup">
										<p>
											<?= $arItem["PROPERTIES"]["TWO_BEDS_PROOP"]["NAME"] ?>
										</p>
										<svg>
											<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
										</svg>
									</div>
								</div>
							<? endif; ?>
							<? if ($arItem["PROPERTIES"]["SAFE_PROOP"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-elem">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-safe'>
										</use>
									</svg>
									<div class="popup">
										<p>
											<?= $arItem["PROPERTIES"]["SAFE_PROOP"]["NAME"] ?>
										</p>
										<svg>
											<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
										</svg>
									</div>
								</div>
							<? endif; ?>
							<? if ($arItem["PROPERTIES"]["TV_PROOP"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-elem">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-tv'>
										</use>
									</svg>
									<div class="popup">
										<p>
											<?= $arItem["PROPERTIES"]["TV_PROOP"]["NAME"] ?>
										</p>
										<svg>
											<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
										</svg>
									</div>
								</div>
							<? endif; ?>
							<? if ($arItem["PROPERTIES"]["DIVAN_PROOP"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-elem">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-sofa'>
										</use>
									</svg>
									<div class="popup">
										<p>
											<?= $arItem["PROPERTIES"]["DIVAN_PROOP"]["NAME"] ?>
										</p>
										<svg>
											<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
										</svg>
									</div>
								</div>
							<? endif; ?>
							<? if ($arItem["PROPERTIES"]["COOK_PLACE_PROOP"]["VALUE"] === "Y"): ?>
								<div class="hover-slider__options-elem">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#static-stove'>
										</use>
									</svg>
									<div class="popup">
										<p>
											<?= $arItem["PROPERTIES"]["COOK_PLACE_PROOP"]["NAME"] ?>
										</p>
										<svg>
											<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
										</svg>
									</div>
								</div>
							<? endif; ?>
						</div>
					</div>
					<div class="room-card__info">
						<div class="room-card__info-top">
							<div class="room-card__name">
								<p>
									<?= $arItem['NAME'] ?>
								</p>
							</div>
							<div class="room-card__proops">
								<div class="room-card__proops-elem">
									<svg class="room-card__proops-icon">
										<use xlink:href='<?= SPRITE_PATH ?>#static-capacity'>
										</use>
									</svg>
									<p>
										<?= $arItem["PROPERTIES"]["CAPACITY"]["VALUE"] ?>&nbsp;
									</p>
								</div>
								<div class="room-card__proops-elem">
									<svg class="room-card__proops-icon">
										<use xlink:href='<?= SPRITE_PATH ?>#static-plan'>
										</use>
									</svg>
									<p>
										<?= $arItem["PROPERTIES"]["PLACE_KVM"]["VALUE"] ?>
										м<sup>2</sup>
									</p>
								</div>
							</div>
						</div>
						<div class="room-card__info-bottom">
							<div class="room-card__price">
								<p>от&nbsp;
									<span>
										<?= Placestart\Utils::formatNumber($arItem["PROPERTIES"]["START_PRICE"]["VALUE"]) ?>
										₽
									</span> за ночь
								</p>
							</div>
							<div class="room-card__more">
								<p>Подробнее</p>
								<div class="room-card__more-circle">
									<svg>
										<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
									</svg>
								</div>
							</div>
						</div>

					</div>
				</a>


			<?php endforeach ?>
		</div>
	</div>
</section>