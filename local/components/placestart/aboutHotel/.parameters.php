<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
use \Bitrix\Main\Loader;

Loader::includeModule('placestart.settings');
use Placestart\ComponentParameters;

$params = new ComponentParameters();
$params->group("DATA", "Параметры", 100, [
  "TEXT_LEFT" => $params->string("Текст слева", ["ROWS" => 30]),
  "TEXT_RIGHT" => $params->string("Текст справа", ["ROWS" => 30]),
  "URL" => $params->string("Ссылка на страницу"),
  "IMAGE" => $params->image("Картинка")
]);
$arComponentParameters = $params->create();
?>