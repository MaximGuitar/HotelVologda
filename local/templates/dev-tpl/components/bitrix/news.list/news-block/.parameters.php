<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$arTemplateParameters = array(
	"TEST_CHEKBOX" => array(
		"PARENT" => "BASE",
		"NAME" => "Для текстовой",
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "",
		"REFRESH" => "Y",
	),
);

return $arTemplateParameters;
