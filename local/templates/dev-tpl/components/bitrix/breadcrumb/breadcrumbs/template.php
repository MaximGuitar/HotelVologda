<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
	return "";
ob_start();
?>
    <? $page = $APPLICATION->GetCurPage(); ?>
<nav id="breadcrumbs" class="breadcrumbs <?=$theme = $page == "/about-us/reviews.php" ? "breadcrumbs--brown" : "" ?>" itemscope itemtype="http://schema.org/BreadcrumbList">
	<div class="container">
		<ul>
			<li itemscope itemprop="itemListElement" class="breadcrumbs__elem">
				<span itemprop="name">
					<a href="/">
						Главная
					</a>
				</span>
			</li>
			<? foreach ($arResult as $i => $arItem): ?>
				<li itemscope itemprop="itemListElement" class="breadcrumbs__elem">
					<span itemprop="name">
						&nbsp;/
						<a href="<?= $arItem['LINK'] ?>">
							<?= $arItem['TITLE'] ?>
						</a>
					</span>
				</li>
			<? endforeach ?>
		</ul>
	</div>
</nav>
<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
?>