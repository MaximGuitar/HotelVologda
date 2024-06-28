<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<?php $this->setFrameMode(true); ?>

<section class="news-detail detail-page">
    <div class="detail-page__content">
        <? $APPLICATION->IncludeComponent(
            "placestart:text.page",
            "",
            array(
                "CONTENT_PROPERTY_CODE" => "CONTENT",
                "ELEMENT" => $arResult["ID"],
                "IBLOCK" => $arResult["IBLOCK"]["ID"]
            )
        ); ?>
    </div>
</section>