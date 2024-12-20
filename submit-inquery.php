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
    $mail->setFrom('foramdelvadiya@gmail.com', $_REQUEST['name']);
    $mail->addAddress($_REQUEST['email']);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Inquery Details';
    $html = 'Name : '. $_REQUEST['name'].'<br>'.'Email : '.$_REQUEST['email'].'<br>'.'Phone Number : '.$_REQUEST['phone'].'<br>'.'Description : '.$_REQUEST['desc'];
    $mail->Body = $html;

    // Send the email
    $mail->send();
    echo json_encode(value: ["message" => "Your inquiry has been submitted successfully."]);

} catch (Exception $e) {
    echo json_encode(value: ["message" => "Your inquiry has been not submitted. EMailerrror: {$mail->ErrorInfo}"]);
}
