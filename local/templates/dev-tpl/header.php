<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();

global $USER;

use Bitrix\Main\Loader;
use Placestart\Utils;
use Placestart\WebpackAssets;
use Placestart\LocUtils;

Loader::includeModule('placestart.settings');
$contacts = Placestart\Utils::getContacts();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9LRD5XW');</script>
  <!-- End Google Tag Manager -->
  <?php $assets = new WebpackAssets(SERVER_TPL_PATH . '/dist/manifest.json', SITE_TEMPLATE_PATH . '/'); ?>

  <link rel="stylesheet" href="<?= $assets->get('main.css') ?>">
  <script src="<?= $assets->get('main.js') ?>" defer></script>

  <? $APPLICATION->ShowHead(); ?>
  <title>
    <? $APPLICATION->ShowTitle() ?>
  </title>
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="canonical"
    href="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= $APPLICATION->GetCurPage() ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url"
    content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= $APPLICATION->GetCurPage() ?>">
  <meta property="og:title" content="<? $APPLICATION->ShowTitle() ?>">
  <meta property="og:description" content="<? $APPLICATION->ShowProperty("description") ?>">
  <!-- <meta property="og:image"
    content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= SITE_TEMPLATE_PATH ?>/static/images/404-image.png"> -->
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url"
    content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= $APPLICATION->GetCurPage() ?>">
  <meta property="twitter:title" content="<? $APPLICATION->ShowTitle() ?>">
  <meta property="twitter:description" content="<? $APPLICATION->ShowProperty("description") ?>">
  <!-- <meta property="twitter:image"
    content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= SITE_TEMPLATE_PATH ?>/static/images/404-image.png"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

  <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/src/images/static-favicon.svg">
  <script>
    window.sessid = "<?= bitrix_sessid() ?>"
  </script>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(97104400, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/97104400" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9LRD5XW" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php if ($USER->IsAdmin()): ?>
    <div class="admin-panel">
      <? $APPLICATION->ShowPanel() ?>
    </div>
  <?php endif ?>
  <div id="app" class="app-wrap">
    <main id="main" class="main" x-data="{ openAcessModal: false,modalAcessText:'' }">
      <? $page = $APPLICATION->GetCurPage(); ?>
      <header x-data="{ openMobMenu: false }"
        class="header main__header <?= $theme = $page != "/" ? "header--dark" : "" ?>">
        <div class="container header__container">
          <div class="header__left">
            <a href="<?= $contacts['MapUrl'] ?>" target="_blank" class="header__left-text">
              <p>
                <?= $contacts['address'] ?>
              </p>
            </a>
            <div class="messanger-icons">
              <? if ($contacts['WhatsUp']): ?>
                <a href="<?= $contacts['WhatsUp'] ?>" target="_blank" class="messanger-icons__elem">
                  <svg class="">
                    <use xlink:href='<?= SPRITE_PATH ?>#static-whatsapp'>
                    </use>
                  </svg>
                </a>
              <? endif; ?>
              <? if ($contacts['telegram']): ?>
                <a href="<?= $contacts['telegram'] ?>" target="_blank" class="messanger-icons__elem">
                  <svg class="">
                    <use xlink:href='<?= SPRITE_PATH ?>#static-telegram'>
                    </use>
                  </svg>
                </a>
              <? endif; ?>
            </div>
          </div>
          <div class="header__center">
            <? $APPLICATION->IncludeComponent(
              "bitrix:menu",
              "header-menu",
              array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "includeMenu",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "mainMenu",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "header-menu"
              ),
              false
            ); ?>


          </div>
          <div class="header__right">
            <a href="tel:<?= $contacts['tel'] ?>" class="header__right-tel">
              <p><?= $contacts['tel'] ?></p>
            </a>
            <a href="/booking/" class="btn">
              <p>Забронировать</p>
            </a>
          </div>

          <!-- Мобильная шапка -->
          <div class="header-mobile" :class="{'active':openMobMenu}">
            <a href="<?= $contacts["MapUrl"] ?>" class="header-mobile__yandex-nav img-container">
              <img src="<?= SITE_TEMPLATE_PATH ?>/src/images/yandex-icon.png" alt="">
            </a>
            <a href="/" class="header-mobile__logo">
              <svg>
                <use xlink:href='<?= SPRITE_PATH ?>#static-mobLogo'>
                </use>
              </svg>
            </a>
            <button class="header-mobile__menuBtn nav-toggle" @click="openMobMenu = ! openMobMenu"
              :class="{'active':openMobMenu}">
              <span class="bar-top bar"></span>
              <span class="bar-mid bar"></span>
              <span class="bar-bot bar"></span>
            </button>
          </div>
        </div>

        <div class="mob-menu" :class="{'active':openMobMenu}">
          <a href="/" class="mob-menu__logo">
            <svg>
              <use xlink:href='<?= SPRITE_PATH ?>#static-mobLogo'>
              </use>
            </svg>
          </a>
          <button class="mob-menu__btn" @click="openMobMenu = ! openMobMenu" :class="{'active':openMobMenu}">
            <svg>
              <use xlink:href='<?= SPRITE_PATH ?>#static-cross'>
              </use>
            </svg>
          </button>

          <a href="<?= $contacts['MapUrl'] ?>" target="_blank" class="mob-menu__address">
            <p>
              <?= $contacts['address'] ?>
            </p>
          </a>
          <div class="messanger-icons">
            <a href="<?= $contacts['WhatsUp'] ?>" target="_blank" class="messanger-icons__elem">
              <svg class="">
                <use xlink:href='<?= SPRITE_PATH ?>#static-whatsapp'>
                </use>
              </svg>
            </a>
            <a href="<?= $contacts['telegram'] ?>" target="_blank" class="messanger-icons__elem">
              <svg class="">
                <use xlink:href='<?= SPRITE_PATH ?>#static-telegram'>
                </use>
              </svg>
            </a>
          </div>
          <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "header-menu",
            array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "includeMenu",
              "DELAY" => "N",
              "MAX_LEVEL" => "2",
              "MENU_CACHE_GET_VARS" => array(
              ),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "N",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "mainMenu",
              "USE_EXT" => "N",
              "COMPONENT_TEMPLATE" => "header-menu"
            ),
            false
          ); ?>
          <a href="tel:<?= $contacts['tel'] ?>" class="tel">
            <p><?= $contacts['tel'] ?></p>
          </a>
          <a href="/booking/" class="btn">
            <p>Забронировать</p>
          </a>
          <a href="<?= $contacts["MapUrl"] ?>" class="yandex-nav">
            <div class="yandex-nav__img img-container">
              <img src="<?= SITE_TEMPLATE_PATH ?>/src/images/yandex-icon.png" alt="">
            </div>
            <p>Проложить путь в навигаторе</p>
          </a>

        </div>

        <div class="header-mobile__messengers">
          <p>Забронировать:</p>
          <div class="header-mobile__messengers-list">
            <a href="tel:<?= $contacts['tel'] ?>" target="_blank" class="header-mobile__messengers-elem">
              <svg class="">
                <use xlink:href='<?= SPRITE_PATH ?>#static-phone'>
                </use>
              </svg>
            </a>
            <a href="<?= $contacts['WhatsUp'] ?>" target="_blank" class="header-mobile__messengers-elem">
              <svg class="">
                <use xlink:href='<?= SPRITE_PATH ?>#static-whatsapp'>
                </use>
              </svg>
            </a>
            <a href="<?= $contacts['telegram'] ?>" target="_blank" class="header-mobile__messengers-elem">
              <svg class="">
                <use xlink:href='<?= SPRITE_PATH ?>#static-telegram'>
                </use>
              </svg>
            </a>
          </div>
        </div>
      </header>