<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
$contacts = Placestart\Utils::getContacts();
?>

<footer class="footer">
  <div class="footer__top">
    <div class="container">
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

      <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "footer-menu",
        array(
          "ALLOW_MULTI_SELECT" => "N",
          "CHILD_MENU_TYPE" => "footerMenu",
          "DELAY" => "N",
          "MAX_LEVEL" => "1",
          "MENU_CACHE_GET_VARS" => array(""),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "A",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "ROOT_MENU_TYPE" => "footerMenu",
          "USE_EXT" => "N"
        )
      ); ?>

    </div>
  </div>
  <div class="footer__bottom">
    <div class="container footer__bottom-container">
      <p class="footer__copy">
        © ООО Респект-недвижимость,&nbsp;
        <?= GetDate()['year'] ?>
      </p>
      <a href="/policy/" class="footer__policy">
        <p>Политика конфиденциальности</p>
      </a>
      <a href="https://place-start.ru/" target="_blank" class="madeInPlacestart">
        <p>Сделано в</p>
        <svg class="we">
          <use xlink:href='<?= SPRITE_PATH ?>#placestart'>
          </use>
        </svg>
      </a>
    </div>
  </div>
</footer>

<div class="notice notice--success-send">
  <div class="notice__close-cross">
    <svg>
      <use xlink:href='<?= SPRITE_PATH ?>#exit-notice'>
      </use>
    </svg>
  </div>
  <div class="notice--success-send__title">
    <p>
      Ваша заявка успешно отправлена
    </p>
  </div>
  <div class="notice__close-timer">
    Закроется через <span class="notice__close-seconds">5</span>
  </div>
</div>


<div class="OpenCallbackModal " :class="{'active':openAcessModal}">

  <div class="OpenCallbackModal__overlay" @click="openAcessModal = ! openAcessModal" :class="{'active':openAcessModal}">

  </div>
  <div class=" OpenCallbackModal__block">
    <div class="container">
      <div class="OpenCallbackModal__bg-text" x-text="modalAcessText">
        банкетный зал
      </div>
      <div class="OpenCallbackModal__close" @click="openAcessModal = ! openAcessModal"
        :class="{'active':openAcessModal}">
        <p>Закрыть</p>
        <div class="notice__close-cross">
          <svg>
            <use xlink:href='<?= SPRITE_PATH ?>#exit-notice'>
            </use>
          </svg>
        </div>
      </div>
      <div class="OpenCallbackModal__text">
        <div class="OpenCallbackModal__title">мы можем сообщить об открытии</div>
        <div class="OpenCallbackModal__subtitle">
          Оставьте заявку и мы свяжемся с вами, как только данная услуга будет доступна
        </div>
        <form @succes-submit="openAcessModal = ! openAcessModal" action="/local/ajax/index.php" method="POST" class="js-form discount-form__form OpenCallbackModal__form">
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
      </div>
    </div>
  </div>
</div>
</main>
</div>
</body>

</html>