<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();

use Placestart\ComponentHelper;

$helper = new Placestart\ComponentHelper($component);
?>

<section class="about-hotel-section">
  <div class="about-hotel-section__top">
    <div class="container">
      <?
      $helper->deferredCall('Placestart\Utils::IncludeComponent', [
        'bitrix:breadcrumb',
        [],
        'breadcrumbs'
      ]);
      ?>


      <div class="about-hotel-section__top-content">
        <div class="about-hotel-section__title">
          Об отеле
         </div>
        <div class="about-hotel-section__descr">
          <?= $arParams["~DESCR"] ?>
        </div>
        <a href="<?= $arParams["URL"] ?>" class="btn-right-arr btn-right-arr--black about-hotel-section__more">
          <p>Смотреть номера</p>
          <div class="btn-right-arr__circle">
            <svg>
              <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
            </svg>
          </div>
        </a>
      </div>

    </div>
  </div>
  <div class="container-1920 about-hotel-section__bottom">
    <div class="about-hotel-section__bottom-text1">
      <?= $arParams["~TEXT1"] ?>
    </div>
    <div class="about-hotel-section__bottom-text2">
      <?= $arParams["~TEXT2"] ?>
    </div>
    <div class="img-container about-hotel-section__bottom-img"> <img src="<?= $arParams["IMAGE"] ?>" alt="" class="">
    </div>

  </div>
</section>
<? $helper->saveCache(); ?>