<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
$contacts = Placestart\Utils::getContacts();
$isContacts = $APPLICATION->GetCurPage() === "/contacts/";
?>

<section class="whereAreWe">
  <div class="container whereAreWe__cont">
    <div class="whereAreWe__top <?=$isContacts?"whereAreWe__top--contacts":""?>">
      <div class="whereAreWe__title">
        <p>
          <?= $arParams["~TITLE"] ?>
        </p>
      </div>
      <a href="<?= $contacts["MapUrl"] ?>" target="_blank"
        class="yandex-nav whereAreWe__yandex-nav whereAreWe__yandex-nav--desk ">
        <div class="yandex-nav__img img-container">
          <img src="<?= SITE_TEMPLATE_PATH ?>/src/images/yandex-icon.png" alt="">
        </div>
        <p>Проложить путь в навигаторе</p>
      </a>
    </div>
    <?php if ($isContacts): ?>
      <div class="footer__contacts">
        <a href="<?= $contacts["MapUrl"] ?>" class="footer__contacts-elem">
          <p>
            <?= $contacts['address'] ?>
          </p>
        </a>
        <a href="mailto:<?= $contacts['email'] ?>" class="footer__contacts-elem">
          <p>
            <?= $contacts['email'] ?>
          </p>
        </a>
        <a href="tel:<?= $contacts['tel'] ?>" class="footer__contacts-elem">
          <p>
            <?= $contacts['tel'] ?>
          </p>
        </a>
      </div>
    <?php endif; ?>

    <div class="whereAreWe__list" x-data="FancyboxGallery">
      <a data-fancybox="gallery" href="<?= $arParams["MAP"] ?>" class="img-container whereAreWe__map-container">
        <img src="<?= $arParams["MAP"] ?>" alt="">
      </a>
      <a data-fancybox="gallery" href="<?= $arParams["IMAGE1"] ?>" class="img-container whereAreWe__img1-container">
        <img src="<?= $arParams["IMAGE1"] ?>" alt="">
      </a>
      <a data-fancybox="gallery" href="<?= $arParams["IMAGE2"] ?>" class="img-container whereAreWe__img2-container">
        <img src="<?= $arParams["IMAGE2"] ?>" alt="">
      </a>
    </div>
  </div>
  <a target="_blank" href="<?= $contacts["MapUrl"] ?>"
    class="yandex-nav whereAreWe__yandex-nav whereAreWe__yandex-nav--mob ">
    <div class="yandex-nav__img img-container">
      <img src="<?= SITE_TEMPLATE_PATH ?>/src/images/yandex-icon.png" alt="">
    </div>
    <p>Проложить путь в навигаторе</p>
  </a>
</section>