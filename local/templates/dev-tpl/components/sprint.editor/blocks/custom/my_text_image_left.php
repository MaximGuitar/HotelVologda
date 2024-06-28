<?php /** @var $block array */ ?>
<section class="seoblock <?= $block["imagePosition"] ?>-image">
    <div class="img-container seoblock__img">
        <img src="<?= $block["image"]["file"]["ORIGIN_SRC"] ?>" class="" alt="<?= $image["DESCRIPTION"] ?>"
            loading="lazy">
    </div>
    <div class="seoblock__content">
        <div class="seoblock__title">
            <?= $arParams["TITLE"] ?>
        </div>
        <div class="seoblock__text">
            <?= $block["text"]["value"] ?>
        </div>
    </div>
</section>