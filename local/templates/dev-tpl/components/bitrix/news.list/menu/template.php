<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="menu">
    <div class="container-1920">
        <div class="container menu__top">
            <div class="menu__title">
                <p>наше меню</p>
            </div>
            <?php if ($arParams["FILE_FIELD"]): ?> 
            <a href="<?=$arParams["FILE_FIELD"]?>" class="menu__download-pdf" download>
                <p>Скачать меню в формате PDF</p>
                <svg>
                    <use xlink:href='<?= SPRITE_PATH ?>#download'>
                    </use>
                </svg>
            </a>
            <?php endif; ?>
        </div>
        <div class="menu__wrapper">
            <img src="<?= SITE_TEMPLATE_PATH ?>/src/images/bg-menu.jpg" alt="" class="menu__bg-img">
            <div class="container">
                <div class="menu__elems" x-data="FancyboxGallery">
                    <?php
                    foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <a data-fancybox="gallery" href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                            class="img-container menu__photo" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="menu__img">
                            <div class="menu__bg">
                                <svg>
                                    <use xlink:href='<?= SPRITE_PATH ?>#static-openImg'>
                                    </use>
                                </svg>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>