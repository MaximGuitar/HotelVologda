<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
use \Bitrix\Main\Loader;

Loader::includeModule('placestart.settings');
use Placestart\ComponentParameters;

$params = new ComponentParameters();
$params->group("DATA", "Параметры", 100, [
  "URL" => $params->string("Ссылка на раздел номеров"),
  "DESCR" => $params->string("Описание", ["ROWS" => 30]),
  "TEXT1" => $params->string("Текст1", ["ROWS" => 30]),
  "TEXT2" => $params->string("Текст2", ["ROWS" => 30]),
  "IMAGE" => $params->image("Картинка"),
]);
$arComponentParameters = $params->create();
?>