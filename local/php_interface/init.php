<?php
    # PS PHPMAILER
    require __DIR__.'/PHPMailer/src/PHPMailer.php';
    require __DIR__.'/PHPMailer/src/SMTP.php';
    require __DIR__.'/PHPMailer/src/Exception.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    use \Bitrix\Main\Diag\FileLogger;

    function custom_mail($to, $subject, $message, $additional_headers='', $additional_parameters='', $context=null) {
        $mail = new PHPMailer(true);

        try {
            // $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;                      //Enable verbose debug output
            // $mail->Debugoutput = 'echo';                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.system.place-start.ru';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'semiextsite_hotel-vologda-ru';                     //SMTP username
            $mail->Password   = 'LindenMethanolLuckySpar05';                               //SMTP password
            $mail->Port       = 250;                                    //TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS above

            $mail->setFrom('test@bitrix.ps', 'test-dev.ru');
            //Recipients
            $to = str_replace(' ','', $to);
            $address = explode(',', $to);
            foreach ($address as $addr)
                $mail->addAddress($addr);

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();

            return true;
        } catch (Exception $e) {
            $logger = new FileLogger(__DIR__."/smtp-errors.log");
            $logger->setLevel(\Psr\Log\LogLevel::ERROR);
            $logger->error($mail->ErrorInfo);

            return false;
        }
    }

?>