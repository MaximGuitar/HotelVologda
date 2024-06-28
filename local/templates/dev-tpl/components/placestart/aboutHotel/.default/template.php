<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
  ?>
<section class="about-hotel">
  <div class="container-1920 about-hotel__cont">
    <div class="img-container about-hotel__img-container">
      <img src="<?= $arParams["IMAGE"] ?>" alt="">
    </div>
    <div class="about-hotel__info">
      <p class="about-hotel__title">Об отеле</p>
      <div class="about-hotel__texts">
        <div class="about-hotel__texts-left">
          <?= $arParams["~TEXT_LEFT"] ?>
        </div>
        <div class="about-hotel__texts-right">
          <?= $arParams["~TEXT_RIGHT"] ?>
          <a href="<?= $arParams["URL"] ?>" class="btn-right-arr btn-right-arr--black about-hotel__read-all">
            <p>Почитать подобнее</p>
            <div class="btn-right-arr__circle">
              <svg>
                <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'></use>
              </svg>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>