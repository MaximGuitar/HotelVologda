<?php /** @var $block array */?>
<?php
  $img_width = $block['variant'] == 'double-img' ? 870 : 1470;
  $img_height = $block['variant'] == 'double-img' ? 870 : 800;

  $first_image = Sprint\Editor\Blocks\Image::getImage(
    $block['first_image'],
    [
      'width' => $img_width,
      'height' => $img_height,
      'exact' => 0,
    ]
  );
  $second_image = Sprint\Editor\Blocks\Image::getImage(
    $block['second_image'],
    [
      'width' => $img_width,
      'height' => $img_height,
      'exact' => 0,
    ]
  );
?>
<section class="case-section <?= $block['variant'] == 'double-img' ? : 'single-img' ?> <?= $block['variant'] ?>">
  <div class="container">
    <div class="content-wrap">
      <?php if ($first_image): ?>
        <img src="<?= $first_image['SRC'] ?>" alt="" class="img">
      <?php endif ?>
      <div class="text-row">
        <div>
          <?php if ($block['projectName']): ?>
            <p class="case-title heading-4"><?= $block['projectName'] ?></p>
          <?php endif ?>
          <?php if ($block['date']): ?>
            <p class="case-date text color-gray"><?= $block['date'] ?></p>
          <?php endif ?>
        </div>
        <?php if ($block['description']): ?>
          <p class="case-desc bigtext color-gray"><?= $block['description'] ?></p>
        <?php endif ?>
      </div>
    </div>
    <?php if ($block['variant'] == 'double-img'): ?>
      <div class="content-wrap">
        <?php if ($second_image): ?>
          <img src="<?= $second_image['SRC'] ?>" alt="" class="img">
        <?php endif ?>
        <div class="text-row">
          <div>
            <?php if ($block['second_name']): ?>
              <p class="case-title heading-4"><?= $block['second_name'] ?></p>
            <?php endif ?>
            <?php if ($block['second_date']): ?>
              <p class="case-date text color-gray"><?= $block['second_date'] ?></p>
            <?php endif ?>
          </div>
          <?php if ($block['second_description']): ?>
            <p class="case-desc bigtext color-gray"><?= $block['second_description'] ?></p>
          <?php endif ?>
        </div>
      </div>
    <?php endif ?>
  </div>
</section>