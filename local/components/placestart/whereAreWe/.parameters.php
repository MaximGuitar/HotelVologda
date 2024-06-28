<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
use \Bitrix\Main\Loader;

Loader::includeModule('placestart.settings');
use Placestart\ComponentParameters;

$params = new ComponentParameters();
$params->group("DATA", "Параметры", 100, [
  "TITLE" => $params->string("Заголовок"),
  "MAP" => $params->image("Скрин карты"),
  "IMAGE1" => $params->image("Картинка 1"),
  "IMAGE2" => $params->image("Картинка 2"),
]);
$arComponentParameters = $params->create();
?>