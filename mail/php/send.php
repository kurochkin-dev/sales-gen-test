<?php

require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';

$phone = $_POST['phone'];
$email = $_POST['email'];

$title = "'Заявка' Александров";
$body = "
<b>Номер телефона:</b> $phone<br>
<b>Email:</b> $email<br>
";

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        $GLOBALS['status'][] = $str;
    };

    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Username = 'aleksandrovtest777@gmail.com';
    $mail->Password = 'aleksandrovtest';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('aleksandrovtest777@gmail.com', '"Заявка" Александров');


    $mail->addAddress('order@salesgenerator.pro');

    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    if ($mail->send()) {
        $result = "success";
    } else {
        $result = "error";
    }
} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

echo json_encode(["result" => $result, "status" => $status]);
