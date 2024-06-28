<?php
  function tpl($name, $params = []){
    $templates = new League\Plates\Engine(PLATES_PATH);
    return $templates->render($name, $params);
  }

  function pick_by_keys($array, $keys){
    return array_intersect_key($array, 
      array_flip($keys));
  }
?>