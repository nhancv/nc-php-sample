<?php
require_once "Mail.php";

$from = '<nhancv1992@yahoo.com>';
$to = '<caovannhan2002@gmail.com>';
$subject = 'Sent mail with PEAR through yahoo mail';
$body = "This is the body for testing";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'smtp.mail.yahoo.com',
        'port' => '587',
        'auth' => true,
        'username' => 'nhancv1992@yahoo.com',
        'password' => 'xxxxxxxxxx'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

