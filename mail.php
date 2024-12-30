<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'foramdelvadiya@gmail.com'; // Your email
    $mail->Password = 'zave copr rawt eugt'; // Your password or App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('foramdelvadiya@gmail.com', $_REQUEST['fname']);
    $mail->addAddress($_REQUEST['email']);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = $_REQUEST['fname'];

    $html = 'First Name : '. $_REQUEST['fname'].'<br>'. 'Last Name :'.$_REQUEST['lname'].'<br>'.'Email : '.$_REQUEST['email'].'<br>'.'Phone Number : '.$_REQUEST['phone'].'<br>'.'Message : '.$_REQUEST['message'];

    $mail->Body = $html;
    // Send the email
    $mail->send();
    echo json_encode(value: ["message" => "Success! Our team will contact you soon."]);

} catch (Exception $e) {
    echo json_encode(value: ["message" => "Email could not be sent.  EMailerrror: {$mail->ErrorInfo}"]);
}
