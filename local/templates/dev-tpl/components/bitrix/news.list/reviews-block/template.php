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
$contacts = Placestart\Utils::getContacts();
$is_mobile = ($user_agent_mob = strripos($_SERVER['HTTP_USER_AGENT'], "mobile") || $user_agent_iphone = strripos($_SERVER['HTTP_USER_AGENT'], "iphone") || $user_agent_androidtouch = strripos($_SERVER['HTTP_USER_AGENT'], "androidtouch"));
?>
<? $page = $APPLICATION->GetCurPage(); ?>
<section class="reviews-block <?= $theme = $page == "/about-us/reviews.php" ? "reviews-block--zeroMargin" : "" ?>"
	x-data="reviewSlider(2.7,20)">
	<div class="reviews-block__swiper-blur"></div>
	<div class="container">
		<div class="reviews-block__top">
			<div class="reviews-block__title">
				<p>Что вы говорите о нашем отеле</p>
			</div>
			<? if (!$is_mobile): ?>
				<div class="slider-arrows reviews-block__desk">
					<div class="slider-arrows__elem slider-arrows__elem--left" x-ref="prev">
						<svg>
							<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
							</use>
						</svg>
					</div>
					<div class="slider-arrows__elem slider-arrows__elem--right" x-ref="next">
						<svg>
							<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
							</use>
						</svg>
					</div>
				</div>
			<? endif; ?>
		</div>
		<div class="reviews-block__list">
			<div class="swiper reviews-block__swiper" x-ref="reviewSwiper">
				<div class="swiper-wrapper">
					<? foreach ($arResult["ITEMS"] as $arItem): ?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<a target="_blanck" <? if ($arItem["PROPERTIES"]["URL"]["VALUE"]): ?>href="<?= $arItem["PROPERTIES"]["URL"]["VALUE"] ?>" <? endif ?>
							class="swiper-slide reviews-block__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
							<div class="reviews-block__item-text">
								<p>
									<?= $arItem["PREVIEW_TEXT"] ?>
								</p>
							</div>
							<div class="reviews-block__item-bottomBlock">
								<div class="reviews-block__author">
									<p>
										<?= $arItem["PROPERTIES"]["AUTHOR"]["VALUE"] ?>
									</p>
								</div>
								<div class="reviews-block__date">
									<p>
										<?= $arItem["DISPLAY_ACTIVE_FROM"] ?>
									</p>
								</div>
							</div>
						</a>
					<? endforeach; ?>
				</div>

			</div>
		</div>
		<? if ($is_mobile): ?>
			<div class="slider-arrows reviews-block__mob">
				<div class="slider-arrows__elem slider-arrows__elem--left" x-ref="prev">
					<svg>
						<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
						</use>
					</svg>
				</div>
				<div class="slider-arrows__elem slider-arrows__elem--right" x-ref="next">
					<svg>
						<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
						</use>
					</svg>
				</div>
			</div>
		<? endif ?>
		<div class="reviews-block__add">
			<p>Отзывы о нас: </p>
			<div class="reviews-block__messangers">
				<!-- <? if ($contacts["Vk"]): ?>
					<a href="<?= $contacts["Vk"] ?>" target="_blank" class="reviews-block__messangers-icon">
						<svg>
							<use xlink:href='<?= SPRITE_PATH ?>#vk-icon'>
							</use>
						</svg>
					</a>
				<? endif; ?>
				<? if ($contacts["urlYandexMapCard"]): ?>
					<a href="<?= $contacts["urlYandexMapCard"] ?>" target="_blank" class="reviews-block__messangers-icon">
						<svg>
							<use xlink:href='<?= SPRITE_PATH ?>#point-yandex-icon'>
							</use>
						</svg>
					</a>
				<? endif; ?>
				<? if ($contacts["url2GisMapCard"]): ?>
					<a href="<?= $contacts["url2GisMapCard"] ?>" target="_blank" class="reviews-block__messangers-icon">
						<svg>
							<use xlink:href='<?= SPRITE_PATH ?>#point-2gis-icon'>
							</use>
						</svg>
					</a>
				<? endif; ?>
				<? if ($contacts["urlGoogleMapCard"]): ?>
					<a href="<?= $contacts["urlGoogleMapCard"] ?>" target="_blank" class="reviews-block__messangers-icon">
						<svg>
							<use xlink:href='<?= SPRITE_PATH ?>#pointGoogleIcon'>
							</use>
						</svg>
					</a>
				<? endif; ?> -->
				<?
				$iblockID = 12;
				$arSelect = array("ID", "NAME", "PROPERTY_SITE_URL", "PROPERTY_ICON", "PROPERTY_HOVER_ICON");
				$arFilter = array("IBLOCK_ID" => $iblockID, "ACTIVE" => "Y");
				$reviewsIcons = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
				?>
				<? while ($ob = $reviewsIcons->GetNextElement()):
					$arFields = $ob->GetFields();
					// d($arFields);
					// d($ob);
					$img = CFile::GetPath($arFields["PROPERTY_ICON_VALUE"]);
					$imgHover = CFile::GetPath($arFields["PROPERTY_HOVER_ICON_VALUE"]);
					// d($arFields);
					?>
					<a href="<?= $arFields["PROPERTY_SITE_URL_VALUE"] ?>" target="_blank"
						class="reviews-block__messangers-icon">
						<img src="<?= $img ?>" alt="" class="reviews-block__main-img">
						<img src="<?= $imgHover??$img ?>" alt="" class="reviews-block__main-hover-img">
						<div class="popup">
							<p>
								<?= $arFields["NAME"] ?>
							</p>
							<svg>
								<use xlink:href='<?= SPRITE_PATH ?>#static-whiteTriangle'></use>
							</svg>
						</div>
					</a>
				<? endwhile ?>


			</div>
		</div>
	</div>


	<!-- <div class="btn-right-arr btn-right-arr--white reviews-block__open">
		<p>Подобнее</p>
		<div class="btn-right-arr__circle">
			<svg>
				<use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
			</svg>
		</div>
	</div> -->
</section>