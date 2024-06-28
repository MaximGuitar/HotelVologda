<?php
namespace Placestart\Controllers;

use \Valitron\Validator;
use Bitrix\Main\Mail\Event;

class Feedback
{
  public static function callback(array $data)
  {
    $result = ["status" => "success"];

    Validator::lang("ru");

    $v = new Validator($data);
    $v->setPrependLabels(false);
    $v->rule("required", ["phone"]);
    $v->rule("regex", "phone", "/\+\d\ \d{3}\ \d{3}-\d{2}-\d{2}/i");

    // if (!$v->validate()) {
    //   $result = [
    //     "status" => "not_valid",
    //     "errors" => $v->errors()
    //   ];

    //   return $result;
    // }

    $event = Event::send([
      "EVENT_NAME" => "FEEDBACK",
      "LID" => "s1",
      "C_FIELDS" => [
        "PHONE" => $data["phone"],
        "NAME" => $data["name"],
      ],
    ]);

    if (!$event->isSuccess()) {
      $result = [
        "status" => "event_error",
        "errors" => $event->getErrorMessages()
      ];
    }

    return $result;
  }
}
?>