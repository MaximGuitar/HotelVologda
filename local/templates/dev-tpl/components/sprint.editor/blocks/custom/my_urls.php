<?php /**
  * @var $block array
  * @var $this  SprintEditorBlocksComponent
  */

use Placestart\Utils;

?>
<? $CurUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<section class="detail-container share-url">
  <div class="reviews-block__add">
    <p>Поделиться новостью </p>
    <div class="reviews-block__messangers">
      <a href="https://vk.com/share.php?url=<?= $CurUrl ?>"
        target="_blank" class="reviews-block__messangers-icon">
        <svg>
          <use xlink:href='<?= SPRITE_PATH ?>#vk-icon'>
          </use>
        </svg>
      </a>

      <a href="https://telegram.me/share/url?url=<?= $CurUrl ?>"
        target="_blank" class="reviews-block__messangers-icon">
        <svg>
          <use xlink:href='<?= SPRITE_PATH ?>#telega'>
          </use>
        </svg>
      </a>

      <a onclick="copyText('<?= $CurUrl ?>')" target="_blank" class="reviews-block__messangers-icon reviews-block__messangers-icon--copyURL">
        <svg>
          <use xlink:href='<?= SPRITE_PATH ?>#shareUrl'>
          </use>
        </svg>
      </a>
    </div>
  </div>
</section>