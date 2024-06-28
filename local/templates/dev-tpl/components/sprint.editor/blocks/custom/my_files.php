<?php /**
  * @var $block array
  * @var $this  SprintEditorBlocksComponent
  */

use Placestart\Utils;

?>
<?php if (!empty($block['files'])): ?>
  <div class="content-block detail-container content-files">
    <?php
    foreach ($block['files'] as $item):
      $info = Utils::getFileInfo($item['file']['CONTENT_TYPE'], $item['file']['FILE_SIZE']); ?>
      <a href="<?= $item['file']['SRC'] ?>" download="<?= $item['file']['ORIGINAL_NAME'] ?>" class="content-files__elem">
        <div class="content-files__elem-name">
          <?= $item['desc'] ? $item['desc'] : $item['file']['ORIGINAL_NAME'] ?>
        </div>
        <div class="content-files__elem-bottom">
          <svg class="content-files__elem-icon">
            <use href='<?= SITE_TEMPLATE_PATH ?>/static/images/sprite.svg#static-file'></use>
          </svg>
          <p class="content-files__elem-meta"><?= $info['mime'] ?>     <?= $info['size'] ?></p>
        </div>
      </a>
    <?php endforeach ?>
  </div>
<?php endif ?>