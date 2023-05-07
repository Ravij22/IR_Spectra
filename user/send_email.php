<?php
function smtp_mailer($to, $subject, $msg, $username)
{
    require_once 'config.php';
    require 'vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("rachitshah0709@gmail.com", "Blinkster Admin");
    $email->setSubject($subject);
    $email->addTo($to, $username);
    $email->addContent($msg);
    // $email->addContent(
    //     "text/html",
    //     "<strong>and easy to do anywhere, even with PHP</strong>"
    // );
    // $sendgrid = new \SendGrid(SENDGRID_API_KEY);
    // try {
    //     $response = $sendgrid->send($email);
    //     print $response->statusCode() . "\n";
    //     print_r($response->headers());
    //     print $response->body() . "\n";
    // } catch (Exception $e) {
    //     echo 'Caught exception: ' . $e->getMessage() . "\n";
    // }

}
