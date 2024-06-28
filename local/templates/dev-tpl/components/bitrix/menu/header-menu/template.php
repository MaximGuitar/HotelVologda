<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die(); ?>
<?php if (count($arResult) > 0): ?>
  <nav class="header-menu">
    <?php foreach ($arResult as $key => $item): ?>
      <?php if ($item["IS_PARENT"]): ?>
        <div class="header-menu__elem-wrapper" x-data="{ Menu<?= $key ?>: false }">
          <div class="header-menu__elem" @click=" Menu<?= $key ?> =! Menu<?= $key ?>">
            <p>
              <?= $item["TEXT"] ?>
            </p>
            <div class="circle"></div>
          </div>
          <div class="header-menu__submenu" :class="{'active': Menu<?= $key ?>}">
          <div class="header-menu__submenu-hover-area"></div>
            <a href="<?= $item["LINK"] ?>" class="header-menu__submenu-elem">
              <p>
                <?= $item["TEXT"] ?>
              </p>
            </a>
            <?php foreach ($item["CHILD"] as $subitem): ?>
              <a href="<?= $subitem["LINK"] ?>" class="header-menu__submenu-elem">
                <p>
                  <?= $subitem["TEXT"] ?>
                </p>
              </a>
            <?php endforeach ?>
            <div class="header-menu__submenu-back" @click=" Menu<?= $key ?> =! Menu<?= $key ?>">
              <div class="header-menu__submenu-back-circle">
                <svg>
                  <use xlink:href='<?=SPRITE_PATH?>#right-arrow'>
                  </use>
                </svg>
              </div>
              <p>Назад</p>
            </div>
          </div>
        </div>
      <?php else: ?>
        <a href="<?= $item["LINK"] ?>" class="header-menu__elem">
          <p>
            <?= $item["TEXT"] ?>
          </p>
        </a>
      <?php endif ?>
      <? if ($key === 2): ?>
        <a href="/" class="header-menu__logo">
          <svg>
            <use xlink:href='<?= SPRITE_PATH ?>#static-logo'>
            </use>
          </svg>
        </a>
      <? endif; ?>
    <?php endforeach ?>
  </nav>
<?php endif ?>