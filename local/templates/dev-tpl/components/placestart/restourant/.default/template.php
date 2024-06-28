<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
?>
<section class="restourant">
  <div class="container-1920 restourant__cont">

    <div class="restourant__info">
      <p class="restourant__title">Ресторан</p>
      <div class="restourant__text">
        <?= $arParams["~TEXT_LEFT"] ?>
      </div>
      <a href="<?= $arParams["URL"] ?>" class="btn-right-arr btn-right-arr--black restourant__read-all">
        <p>Что в меню?</p>
        <div class="btn-right-arr__circle">
          <svg>
            <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
          </svg>
        </div>
      </a>
    </div>
    <div class="img-container restourant__images">
      <img src="<?= $arParams["IMAGE_RIGHT"] ?>" class="restourant__img-right" alt="">
      <img src="<?= $arParams["IMAGE_LEFT"] ?>" class="restourant__img-left" alt="">
    </div>
  </div>
</section>