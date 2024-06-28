<?php
  require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");

  if(!check_bitrix_sessid())
	  die("accsess denied");

  use \Bitrix\Main\Loader;
  use \Placestart\Controllers;

  Loader::includeModule("placestart.settings");

  switch ($_REQUEST["action"]){
    case "callback":
      $result = Controllers\Feedback::callback($_REQUEST);
      if ($result["status"] == "success" || $result["status"] == "not_valid"){
        echo "success";
      }else{
        echo "error";
      }
      break;
  }

  die();
?>