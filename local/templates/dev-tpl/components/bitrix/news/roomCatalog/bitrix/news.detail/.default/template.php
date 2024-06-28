<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Loader;

?>








<section class="room">
    <section class="container room__section-main">
        <div x-data="catalogSlider" class="hover-slider room__slider">
            <div class="swiper" x-ref="CatalogSwiper">
                <div class="swiper-wrapper">
                    <? $gallery = $arResult["PROPERTIES"]["GALLERY"]["VALUE"]; ?>
                    <? foreach ($gallery as $photo): ?>
                        <div class="swiper-slide">
                            <div class="img-container hover-slider__img">
                                <img src="<?= CFile::GetPath($photo) ?>" alt="<?= $arResult['NAME'] ?>" class="">
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
        </div>
        <div class="room__main-info">
            <div class="room__title">
                <p class="text">
                    <?= $arResult["NAME"] ?>
                </p>
                <div class="room__options-leader leader-label">
                    <svg>
                        <use xlink:href='<?= SPRITE_PATH ?>#static-star'>
                        </use>
                    </svg>
                    <p>Лидер продаж</p>
                </div>
            </div>
            <div class="room__proops">
                <div class="room__proops-elem">
                    <svg class="room__proops-icon">
                        <use xlink:href='<?= SPRITE_PATH ?>#static-capacity'>
                        </use>
                    </svg>
                    <p>
                        <?= $arResult["PROPERTIES"]["CAPACITY"]["VALUE"] ?>&nbsp;
                    </p>
                </div>
                <div class="room__proops-elem">
                    <svg class="room__proops-icon">
                        <use xlink:href='<?= SPRITE_PATH ?>#static-plan'>
                        </use>
                    </svg>
                    <p>
                        <?= $arResult["PROPERTIES"]["PLACE_KVM"]["VALUE"] ?>
                        кв.м
                    </p>
                </div>
            </div>
            <div class="room__descr">
                <p>
                    <?= $arResult["PREVIEW_TEXT"] ?>
                </p>
            </div>
        </div>
        <div class="room__main-facilities">
            <div class="room__main-facilities-title">
                Основные удобства
            </div>
            <div class="room__main-facilities-list">
                <? if ($arResult["PROPERTIES"]["WIFI_PROOP"]["VALUE"] === "Y"): ?>
                    <div class="room__main-facilities-item">
                        <div class="room__main-facilities-item-icon">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#static-wifi'>
                                </use>
                            </svg>
                        </div>
                        <p>
                            <?= $arResult["PROPERTIES"]["WIFI_PROOP"]["NAME"] ?>
                        </p>
                    </div>

                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["CONDISH_PROOP"]["VALUE"] === "Y"): ?>
                    <div class="room__main-facilities-item">
                        <div class="room__main-facilities-item-icon">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#static-cold'>
                                </use>
                            </svg>

                        </div>
                        <p>
                            <?= $arResult["PROPERTIES"]["CONDISH_PROOP"]["NAME"] ?>
                        </p>
                    </div>

                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["TWO_BEDS_PROOP"]["VALUE"] === "Y"): ?>
                    <div class="room__main-facilities-item">
                        <div class="room__main-facilities-item-icon">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#static-bed'>
                                </use>
                            </svg>

                        </div>
                        <p>
                            <?= $arResult["PROPERTIES"]["TWO_BEDS_PROOP"]["NAME"] ?>
                        </p>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["SAFE_PROOP"]["VALUE"] === "Y"): ?>
                    <div class="room__main-facilities-item">
                        <div class="room__main-facilities-item-icon">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#static-safe'>
                                </use>
                            </svg>

                        </div>
                        <p>
                            <?= $arResult["PROPERTIES"]["SAFE_PROOP"]["NAME"] ?>
                        </p>
                    </div>

                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["TV_PROOP"]["VALUE"] === "Y"): ?>
                    <div class="room__main-facilities-item">
                        <div class="room__main-facilities-item-icon">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#static-tv'>
                                </use>
                            </svg>

                        </div>
                        <p>
                            <?= $arResult["PROPERTIES"]["TV_PROOP"]["NAME"] ?>
                        </p>
                    </div>

                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["DIVAN_PROOP"]["VALUE"] === "Y"): ?>
                    <div class="room__main-facilities-item">
                        <div class="room__main-facilities-item-icon">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#static-sofa'>
                                </use>
                            </svg>

                        </div>
                        <p>
                            <?= $arResult["PROPERTIES"]["DIVAN_PROOP"]["NAME"] ?>
                        </p>
                    </div>

                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["COOK_PLACE_PROOP"]["VALUE"] === "Y"): ?>
                    <div class="room__main-facilities-item">
                        <div class="room__main-facilities-item-icon">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#static-stove'>
                                </use>
                            </svg>

                        </div>
                        <p>
                            <?= $arResult["PROPERTIES"]["COOK_PLACE_PROOP"]["NAME"] ?>
                        </p>
                    </div>

                <? endif; ?>
                <a href="#all-fatilites" class="btn-right-arr btn-right-arr--black room__main-facilities-more">
                    <p>Смотреть все</p>
                    <div class="btn-right-arr__circle">
                        <svg>
                            <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
                        </svg>
                    </div>
                </a>
            </div>
    </section>
    <section class="booking-block">
        <div class="container booking-block__cont">
            <div class="booking-block__price">
                <p>
                    <!-- от&nbsp; -->
                    <span>
                        <?= Placestart\Utils::formatNumber($arResult["PROPERTIES"]["START_PRICE"]["VALUE"]) ?>
                    </span><span class="mono">₽</span>
                    </span> за ночь
                </p>
                <div class="booking-block__bg-text">
                    <?= $arResult['NAME'] ?>
                </div>
            </div>
            <?php $bnovoID = $arResult["PROPERTIES"]["ID_BNOVO"]["VALUE"]; ?>
            <a href="/booking<? if ($bnovoID) {
                echo "?onlyrooms=" . $bnovoID;
            } ?>" class="btn-right-arr btn-right-arr--white booking-block__btn">
                <p>Забронировать</p>
                <div class="btn-right-arr__circle">
                    <svg>
                        <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
                        </use>
                    </svg>
                </div>
            </a>
        </div>
    </section>
    <section class="rules container">
        <div class="rules__title">
            Правила объекта размещения
        </div>
        <div class="rules__time-list">
            <?php if ($arResult["PROPERTIES"]["TIME_CHEKIN"]["VALUE"]): ?>
                <div class="rules__live-time">
                    <div class="rules__time-title">
                        Заезд
                    </div>
                    <div class="rules__time-subtitle">
                        <?= $arResult["PROPERTIES"]["TIME_CHEKIN"]["VALUE"] ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($arResult["PROPERTIES"]["TIME_CHEKOUT"]["VALUE"]): ?>
                <div class="rules__live-time">
                    <div class="rules__time-title">
                        отъезд
                    </div>
                    <div class="rules__time-subtitle">
                        <?= $arResult["PROPERTIES"]["TIME_CHEKOUT"]["VALUE"] ?>
                    </div>
                </div> <?php endif; ?>
            <?php if ($arResult["PROPERTIES"]["MIN_LENGTH_STAY"]["VALUE"]): ?>
                <div class="rules__live-time">
                    <div class="rules__time-title">
                        минимальный срок проживания
                    </div>
                    <div class="rules__time-subtitle">
                        <p>от
                            <?= $arResult["PROPERTIES"]["MIN_LENGTH_STAY"]["VALUE"] ?>&nbsp;суток
                        </p>
                    </div>
                </div> <?php endif; ?>
        </div>
        <div class="rules__list">
            <?php if ($arResult["PROPERTIES"]["WITH_CHILDREN_RULE"]["VALUE"]): ?>
                <div class="rules__list-elem">
                    <svg class="rules__elem-icon">
                        <use xlink:href='<?= SPRITE_PATH ?>#static-child'>
                        </use>
                    </svg>
                    <p>Дополнительное место по запросу</p>
                </div>
            <?php endif; ?>
            <?php if ($arResult["PROPERTIES"]["WITH_PET_RULE"]["VALUE"]): ?>
                <div class="rules__list-elem">
                    <svg class="rules__elem-icon">
                        <use xlink:href='<?= SPRITE_PATH ?>#static-pet'>
                        </use>
                    </svg>
                    <p>Можно с питомцами по согласованию</p>
                </div>
            <?php endif; ?>
            <?php if ($arResult["PROPERTIES"]["PARTY_RULE"]["VALUE"]): ?>
                <div class="rules__list-elem">
                    <svg class="rules__elem-icon">
                        <use xlink:href='<?= SPRITE_PATH ?>#static-party'>
                        </use>
                    </svg>
                    <p>Вечеринки и мероприятия по согласованию</p>
                </div>
            <?php endif; ?>
            <?php if ($arResult["PROPERTIES"]["SMOKE_RULE"]["VALUE"]): ?>
                <div class="rules__list-elem">
                    <svg class="rules__elem-icon">
                        <use xlink:href='<?= SPRITE_PATH ?>#static-smoke'>
                        </use>
                    </svg>
                    <p>Курение в номере запрещено</p>
                </div>
            <?php endif; ?>
            <?php if ($arResult["PROPERTIES"]["DOC_RULE"]["VALUE"]): ?>
                <div class="rules__list-elem">
                    <svg class="rules__elem-icon">
                        <use xlink:href='<?= SPRITE_PATH ?>#static-doc'>
                        </use>
                    </svg>
                    <p>Предоставляем отсчетные документы о проживании по согласованию</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="facilities" id="all-fatilites">
        <div class="container">
            <div class="facilities__main">
                <div class="facilities__main-title">
                    Основные удобства
                </div>
                <div class="facilities__main-facilities-list">
                    <? if ($arResult["PROPERTIES"]["WIFI_PROOP"]["VALUE"] === "Y"): ?>
                        <div class="room__main-facilities-item">
                            <div class="room__main-facilities-item-icon">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-wifi'>
                                    </use>
                                </svg>
                            </div>
                            <p>
                                <?= $arResult["PROPERTIES"]["WIFI_PROOP"]["NAME"] ?>
                            </p>
                        </div>

                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["CONDISH_PROOP"]["VALUE"] === "Y"): ?>
                        <div class="room__main-facilities-item">
                            <div class="room__main-facilities-item-icon">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-cold'>
                                    </use>
                                </svg>

                            </div>
                            <p>
                                <?= $arResult["PROPERTIES"]["CONDISH_PROOP"]["NAME"] ?>
                            </p>
                        </div>

                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["TWO_BEDS_PROOP"]["VALUE"] === "Y"): ?>
                        <div class="room__main-facilities-item">
                            <div class="room__main-facilities-item-icon">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-bed'>
                                    </use>
                                </svg>

                            </div>
                            <p>
                                <?= $arResult["PROPERTIES"]["TWO_BEDS_PROOP"]["NAME"] ?>
                            </p>
                        </div>
                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["SAFE_PROOP"]["VALUE"] === "Y"): ?>
                        <div class="room__main-facilities-item">
                            <div class="room__main-facilities-item-icon">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-safe'>
                                    </use>
                                </svg>

                            </div>
                            <p>
                                <?= $arResult["PROPERTIES"]["SAFE_PROOP"]["NAME"] ?>
                            </p>
                        </div>

                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["TV_PROOP"]["VALUE"] === "Y"): ?>
                        <div class="room__main-facilities-item">
                            <div class="room__main-facilities-item-icon">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-tv'>
                                    </use>
                                </svg>

                            </div>
                            <p>
                                <?= $arResult["PROPERTIES"]["TV_PROOP"]["NAME"] ?>
                            </p>
                        </div>

                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["DIVAN_PROOP"]["VALUE"] === "Y"): ?>
                        <div class="room__main-facilities-item">
                            <div class="room__main-facilities-item-icon">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-sofa'>
                                    </use>
                                </svg>

                            </div>
                            <p>
                                <?= $arResult["PROPERTIES"]["DIVAN_PROOP"]["NAME"] ?>
                            </p>
                        </div>

                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["COOK_PLACE_PROOP"]["VALUE"] === "Y"): ?>
                        <div class="room__main-facilities-item">
                            <div class="room__main-facilities-item-icon">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-stove'>
                                    </use>
                                </svg>

                            </div>
                            <p>
                                <?= $arResult["PROPERTIES"]["COOK_PLACE_PROOP"]["NAME"] ?>
                            </p>
                        </div>

                    <? endif; ?>
                </div>
            </div>
            <?php if ($arResult["PROPERTIES"]["BATHROOM_COMFORTABLE"]["VALUE"]): ?>
                <div class="facilities__all">
                    <div class="facilities__all-title">
                        Все удобства
                    </div>
                    <div class="facilities__all-list">
                        <?php if ($arResult["PROPERTIES"]["BATHROOM_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["BATHROOM_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["BATHROOM_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["EQUIPMENT_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["EQUIPMENT_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["EQUIPMENT_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["REST_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["REST_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["REST_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["KITCHEN_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["KITCHEN_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["KITCHEN_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["YARD_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["YARD_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["YARD_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["VIEW_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["VIEW_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["VIEW_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["DOSUG_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["DOSUG_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["DOSUG_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["AVAILABILITY_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["AVAILABILITY_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["AVAILABILITY_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($arResult["PROPERTIES"]["FOR_KIDS_COMFORTABLE"]["VALUE"]): ?>
                            <div class="facilities__all-item">
                                <div class="facilities__all-item-name">
                                    <?= $arResult["PROPERTIES"]["FOR_KIDS_COMFORTABLE"]["NAME"] ?>
                                </div>
                                <div class="facilities__all-sublist">
                                    <? foreach ($arResult["PROPERTIES"]["FOR_KIDS_COMFORTABLE"]["VALUE"] as $value): ?>
                                        <div class="facilities__all-sublist-item">
                                            <?= $value ?>
                                        </div>
                                    <? endforeach ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <section class="discount-form">
        <div class="container discount-form__container">
            <div class="discount-form__bg-text">
                <p>СКИДКА</p>
            </div>
            <div class="discount-form__text">
                <div class="discount-form__text-discount">
                    скидка 10%
                </div>
                <div class="discount-form__descr">
                    Оставьте заявку на бронирование<br> прямо сейчас и получите скидку
                </div>
            </div>
            <div class="discount-form__right">
                <form action="/local/ajax/index.php" method="POST" class="js-form discount-form__form">
                    <div class="input-wrapper">
                        <p class="error-text">Некорректный ввод</p>
                        <input placeholder="Ваше имя" id="name" name="name" type="text"
                            class="text-input discount-form__input">
                    </div>
                    <div class="input-wrapper">
                        <p class="error-text">Некорректный ввод</p>
                        <input x-data="PhoneInputMask" placeholder="Номер телефона" name="phone" type="text"
                            class="text-input discount-form__input">
                    </div>
                    <?= tpl('dev/sessid') ?>
                    <input type="hidden" name="action" value="callback">
                    <button class="btn-right-arr btn-right-arr--white discount-form__submit">
                        <p>Заказать звонок</p>
                        <div class="btn-right-arr__circle">
                            <svg>
                                <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
                                </use>
                            </svg>
                        </div>
                        <img class="preloader" src="<?= SITE_TEMPLATE_PATH ?>/src/images/preloader.svg" alt="">
                    </button>
                </form>
                <div class="discount-form__policy"><span>Нажимая кнопку, вы соглашаетесь </span> <a href="/policy/">на
                        обработку
                        персональных
                        данных</a></div>
            </div>
        </div>
    </section>

    <?php if ($arResult["PROPERTIES"]["SPECIAL"]): ?>
        <?php
        // Проверяем загрузку модуля инфоблоков
    
        $elementIds = $arResult["PROPERTIES"]["SPECIAL"]["VALUE"]; // ID элементов, данные которых нужно получить
    
        $arSelect = array('ID', 'NAME', 'PROPERTY_CODE', "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PROPERTY_LEFT_TEXT"); // Список свойств для выборки
        $arFilter = array('ID' => $elementIds); // Фильтр по ID элементов
    
        $res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);


        $elements = [];
        while ($element = $res->GetNext()) {
            // Добавляем текущий элемент в массив
            $elements[] = $element;
        }
        ?>

        <? if (count($elements)>0): ?>
            <section class="special-offers">
                <div class="special-offers__title">
                    <div class="container">
                        <p>Специальные предложения</p>
                    </div>
                </div>
                <div class="container">
                    <div class="special-offers__elems">
                        <? foreach ($elements as $element): ?>
                            <a href="<?= $element["DETAIL_PAGE_URL"] ?>" class="special-offers__card">
                                <img src="<?= CFile::GetPath($element["PREVIEW_PICTURE"]) ?>" alt="<?= $element["NAME"] ?>"
                                    class="special-offers__img">
                                <div class="special-offers__subtitle">
                                    <p>
                                        <?= $element["PROPERTY_LEFT_TEXT_VALUE"] ?>
                                    </p>
                                    <svg class="special-offers__icon">
                                        <use xlink:href='<?= SPRITE_PATH ?>#static-birka'>
                                        </use>
                                    </svg>
                                </div>
                                <div class="special-offers__card-title">
                                    <p>
                                        <?= $element["NAME"] ?>
                                    </p>
                                </div>
                            </a>
                        <? endforeach ?>
                    </div>
                </div>
            </section>
        <? endif; ?>
    <?php endif; ?>
    <section class="seoblock">
        <? $path = CFile::GetPath($arResult["PROPERTIES"]["SEO_PICTURE_COMFORTABLE"]["VALUE"]); ?>
        <?php if ($path): ?>
            <div class="img-container seoblock__img">
                <img src="<?= $path ?>" class="" alt="seo">
            </div>
        <?php endif; ?>
        <?php if ($arResult["DETAIL_TEXT"]): ?>
            <div class="seoblock__content">
                <div class="seoblock__title">
                    <?= $arResult["PROPERTIES"]["SEO_TITLE"]["VALUE"] ?>
                </div>
                <div class="seoblock__text">
                    <?= $arResult["DETAIL_TEXT"] ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
</section>