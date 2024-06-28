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

<div class="gallery-section__urls">
  <a class="gallery-section__urls-elem"
    href="/about-us/galereya.php?SECTION_ID=0">
    <p> Все фото</p>
  </a>
  <?php foreach ($arResult['SECTIONS'] as $i => $arSection): ?>
    <a class="gallery-section__urls-elem"
      href="<?= $arSection['SECTION_PAGE_URL'] ?>">
      <p>
        <?= $arSection['NAME'] ?>
      </p>
    </a>
  <?php endforeach ?>
</div>