<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
use \Bitrix\Main\Loader;

Loader::includeModule('placestart.settings');
use Placestart\ComponentParameters;

$params = new ComponentParameters();
$params->group("DATA", "Параметры", 100, [
  "TITLE" => $params->string("Заголовок"),
  "TEXT" => $params->string("Текст", ["ROWS" => 30]),
  "IMAGE" => $params->image("Картинка"),
]);
$arComponentParameters = $params->create();
?>