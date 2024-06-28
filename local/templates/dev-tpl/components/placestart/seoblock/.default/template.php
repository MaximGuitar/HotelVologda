<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
$contacts = Placestart\Utils::getContacts();
?>

<section class="seoblock">
  <div class="img-container seoblock__img">
    <img src="<?= $arParams["IMAGE"] ?>" class="" alt="">
  </div>
  <div class="seoblock__content">
    <div class="seoblock__title">
      <?= $arParams["TITLE"] ?>
    </div>
    <div class="seoblock__text">
      <?= $arParams["~TEXT"] ?>
    </div>
  </div>
</section>