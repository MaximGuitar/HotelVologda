<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();



$arTemplateParameters = array(
	"FILE_FIELD" => array(
		"PARENT" => "BASE",
		"NAME" => "Загрузить файл меню",
		"TYPE" => "FILE",
		"DEFAULT" => "",
		"FD_TARGET" => "F",
		"FD_UPLOAD" => true,
		"FD_USE_MEDIALIB" => true,
		"REFRESH" => "Y",
	),
);

return $arTemplateParameters;
