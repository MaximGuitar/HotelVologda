<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
use \Bitrix\Main\Loader;

Loader::includeModule('placestart.settings');
use Placestart\ComponentParameters;

$params = new ComponentParameters();
$params->group("DATA", "Параметры", 100, [
  "TEXT" => $params->string("Текст", ["ROWS" => 30])
]);
$arComponentParameters = $params->create();
?>