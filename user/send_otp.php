<?php
include('../includes/connect.php');
// include('send_email.php');
$user_email = $_POST['user_email'];
$username = $_POST['user_username'];
// echo $email;
$sql = "select * from `user` where user_email='$user_email' ";
$result = mysqli_query($con, $sql);

$count_row = mysqli_num_rows($result);
$otp = 0;
if ($count_row > 0) {
    $otp = rand(111111, 999999);
    $update_otp = "update `user` set otp=$otp where user_email='$user_email'";
    mysqli_query($con, $update_otp);
    $subject = "OTP for your verification";
    $msg = "Your OTP verification code is " . $otp;
    // var_dump($user_email);
    // echo "<br>yes";

    require_once 'config.php';
    require 'vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("YOUR_REGISTERED_EMAIL, "Nirma VLAB");
    $email->setSubject($subject);
    $email->addTo($user_email, $username);
    $email->addContent("text/plain", "ANY");
    $email->addContent(
        "text/html",
        "<strong>$msg</strong>"
    );
    $sendgrid = new \SendGrid(SENDGRID_API_KEY);
    try {
        $response = $sendgrid->send($email);
    }
    //     print $response->statusCode() . "\n";
    //     print_r($response->headers());
    //     print $response->body() . "\n";}
    catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . "\n";
    }

    // smtp_mailer($email, $subject, $msg, $username);
} else echo "<script> alert('Email ID doesnot exists.') </script>";


echo "<center>";
echo '<html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-commerce website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <form action="verify.php" method="post">
        <div class="form-outline mb-4">
            <input type="text" id="otp" class="form-control"  placeholder="Enter OTP" autocomplete="off" required="required" name="otp">
        </div>
        <div class="mt-4 pd-2">
            <input type="submit" value="Verify OTP" class="bg-info py-2 px-3 border-0" name="sub_otp">
        </div>
        
    </form>
    
    </html>';
echo "</center>";
