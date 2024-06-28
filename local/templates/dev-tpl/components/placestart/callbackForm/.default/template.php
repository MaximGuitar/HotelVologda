<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
?>
<section class="discount-form <?=$arParams["TEXT_PAGE"]==="Y"?'discount-form--text-page':''?>">
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
          <input placeholder="Ваше имя" id="name" name="name" type="text" class="text-input discount-form__input">
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
      <div class="discount-form__policy"><span>Нажимая кнопку, вы соглашаетесь </span> <a href="/policy/">на обработку
          персональных
          данных</a></div>
    </div>
  </div>
</section>