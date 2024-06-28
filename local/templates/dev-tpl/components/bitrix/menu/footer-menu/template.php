<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die(); ?>
<?php if (count($arResult) > 0): ?>
  <nav class="footer__menu">
    <?php foreach ($arResult as $key => $item): ?>
      <a href="<?= $item["LINK"] ?>" class="footer__menu-elem">
        <p>
          <?= $item["TEXT"] ?>
        </p>
      </a>
    <?php endforeach ?>
  </nav>
<?php endif ?>