<?php
  require_once $_SERVER["DOCUMENT_ROOT"].'/local/modules/placestart.settings/vendor/autoload.php';
  require_once $_SERVER["DOCUMENT_ROOT"].'/local/modules/placestart.settings/constants.php';
  require_once $_SERVER["DOCUMENT_ROOT"].'/local/modules/placestart.settings/functions.php';

  include (__DIR__ .'/events/OnGetSearchIndex.php');

  // CModule::AddAutoloadClasses('placestart.settings', [
  //   'PHPInterface\ComponentHelper' => 'lib/ComponentHelper.php',
  // ]);
?>