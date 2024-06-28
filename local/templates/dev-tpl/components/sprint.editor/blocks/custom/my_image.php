<?php /** @var $block array */ ?>
<?php
$image = Sprint\Editor\Blocks\Image::getImage(
    $block,
    [
        'width' => 1120,
        'height' => 768,
        'exact' => 0,
        //'jpg_quality' => 75
    ]
);
?>
<?php if ($block["value"]) { ?>
    <a target="_blank" href="<?= $block["value"] ?>">
    <?php } ?>

    <?php if ($image) { ?>
        <div class="content-image detail-container content-block">
            <img alt="<?= $image['DESCRIPTION'] ?>" src="<?= $image['SRC'] ?>" loading="lazy">
            <div class="content-image__descr">
                <?= $image['DESCRIPTION'] ?>
            </div>
        </div>
    <?php } ?>
    <?php if ($block["value"]) { ?>
    </a>
<?php } ?>