<?php

if (isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_phone'])) {

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_phone'];

    $to = 'cpb.org.ua@gmail.com';
    $subject = 'Заявка с лендинга для Prozorra';

    $message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$name}</h2>
        <p>Почта: {$email}</p>
        <p>Телефон: {$phone}</p>";


    $message .= "
        </body>
        </html>
    ";
    $headers = 'From: info@impressionbureau.pro' . "\r\n" .
        'Reply-To:' . $email . ' ' .
        'X-Mailer: PHP/' . phpversion();
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    mail($to, $subject, $message, $headers);

    header('Location: thanks/index.php');
}
