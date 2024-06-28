<?php /** @var $block array */?>
<?php
$width = 1020;
$height = 800;

switch ($block['variant']){
  case 'img-left':
    $width = 720;
    break;
  case 'center-img-left':
    $width = 570;
    break;
  case 'center-img-right':
    $width = 720;
    break;
  default: 
    $width = 1020;
    break;
}

$image = Sprint\Editor\Blocks\Image::getImage(
  $block['image'],
  [
    'width' => $width,
    'height' => $height,
    'exact' => 0,
  ]
);
?>
<div class="about-project <?= $block['variant'] ?>">
  <div class="text-col">
    <?php if ($block['blockName']): ?>
      <p class="block-name text color-gray"><?= $block['blockName'] ?></p>
    <?php endif ?>
    <?php if ($block['title']): ?>
      <p class="title heading-3"><?= $block['title'] ?></p>
    <?php endif ?>
    <?php if ($block['text']): ?>
      <p class="bigtext"><?= $block['text'] ?></p>
    <?php endif ?>
  </div>
  <?php if ($image): ?>
    <div class="img-col">
      <img src="<?= $image['SRC'] ?>" alt="" class="img">
    </div>
  <?php endif ?>
</div>
