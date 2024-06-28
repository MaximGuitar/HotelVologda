<?php /**
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
    <div class="content-slider  content-block" x-data="textPageSlider(900)">
        <div class="swiper main-swiper" x-ref="swiper">
            <div class="swiper-wrapper" x-data="FancyboxGallery">
                <?php foreach ($images as $image): ?>
                    <a class="swiper-slide content-slider__img-wrap" data-fancybox="slider-gallery"
                        href="<?= $image['ORIGIN_SRC'] ?>">
                        <img class="content-slider__img" src="<?= $image['SRC'] ?>" alt="<?= $image['DESCRIPTION'] ?>">
                    </a>
                <?php endforeach ?>
            </div>
            <div class="detail-container content-slider__bottom">
                <div class="slider-arrows">
                    <div class="slider-arrows__elem slider-arrows__elem--left" x-ref="prev">
                        <svg>
                            <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
                            </use>
                        </svg>
                    </div>
                    <div class="slider-arrows__elem slider-arrows__elem--right" x-ref="next">
                        <svg>
                            <use xlink:href='<?= SPRITE_PATH ?>#right-arrow'>
                            </use>
                        </svg>
                    </div>

                </div>
                <div class="swiper-pagination content-slider__pagintaion" x-ref="pag">
                </div>

            </div>

        </div>
    </div>
<?php endif ?>