<?php
namespace Placestart;

class ComponentUtils{
  private static $placestartGroup = [
    "ID" => "placestart",
    "NAME" => "PLACESTART"
  ];
  public static function getComponentDescription($name, $id, $group = "placestart"){
    return [
      "NAME" => $name,
      "DESCRIPTION" => $name,
      "PATH" => self::$placestartGroup,
    ];
  }
}
?>