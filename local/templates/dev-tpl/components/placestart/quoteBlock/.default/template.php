<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
?>
<? if ($arParams["TEXT"]): ?>
  <section class="quote-block">
    <div class="container">
      <div class="quote-block__text">
       <?=$arParams["~TEXT"]?>
      </div>
    </div>
  </section>
<? endif; ?>