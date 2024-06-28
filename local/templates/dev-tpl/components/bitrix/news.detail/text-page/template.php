<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<section class="text-page">
	<div class="left-col">
		<?$APPLICATION->IncludeComponent(
			"sprint.editor:blocks",
			"custom",
			Array(
				"ELEMENT_ID" => $arResult["ID"],
				"IBLOCK_ID" => $arResult["IBLOCK_ID"],
				"PROPERTY_CODE" => "CONTENT",
			),
			$component,
			Array(
				"HIDE_ICONS" => "Y"
			)
		);?>
	</div>
</section>