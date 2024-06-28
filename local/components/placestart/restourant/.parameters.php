<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
use \Bitrix\Main\Loader;

Loader::includeModule('placestart.settings');
use Placestart\ComponentParameters;

$params = new ComponentParameters();
$params->group("DATA", "Параметры", 100, [
  "URL" => $params->string("Ссылка на меню"),
  "TEXT_LEFT" => $params->string("Текст слева", ["ROWS" => 30]),
  "IMAGE_RIGHT" => $params->image("Картинка справа"),
  "IMAGE_LEFT" => $params->image("Картинка слева")
]);
$arComponentParameters = $params->create();
?>