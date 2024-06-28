<?php
/**
 * @var $block array
 * @var $this  SprintEditorBlocksComponent
 */

$images = Sprint\Editor\Blocks\Gallery::getImages(
    $block,
    [
        'width' => 810,
        'height' => 500,
        'exact' => 0,
    ]
);
?>

<?php if (!empty($images)): ?>
    <div x-data="FancyboxGallery" class="detail-container content-gallery  cols-<?= $block['perRow'] ?>">
        <?php foreach ($images as $image): ?>
            <div class="content-gallery-item">
                <a data-fancybox='gallery' href="<?= $image['ORIGIN_SRC'] ?>" class="content-gallery-item__wrap">
                    <img alt="<?= $image['DESCRIPTION'] ?>" src="<?= $image['SRC'] ?>" class="content-gallery-item__img">
                    <div class="gallery-section__bg">
                        <svg>
                            <use xlink:href='<?= SPRITE_PATH ?>#static-openImg'>
                            </use>
                        </svg>
                    </div>
                </a>
                <div class="content-gallery-item__descr">
                    <?= $image['DESCRIPTION'] ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>