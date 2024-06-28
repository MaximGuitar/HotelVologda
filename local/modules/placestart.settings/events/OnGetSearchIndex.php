<?php
  //индексация содержимого кастомных текстовых блоков из sprint.editor
  AddEventHandler('sprint.editor', 'OnGetSearchIndex', function ($value, $search) {
    foreach ($value['blocks'] as $key => $val) {
      if ($val['name'] == 'my_text') {
        $search .= ' ' . $val['value'];
      }
    }
    return $search;
  });
?>