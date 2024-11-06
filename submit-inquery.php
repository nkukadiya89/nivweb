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
    $mail->Password = 'cpkw ftbt mbhc dftr'; // Your password or App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('foramdelvadiya@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Submit Inquery';
    $mail->Body  = 'This is a test email sent using PHPMailer!';

    // Send the email
    $mail->send();
    echo json_encode(value: ["message" => "Your inquiry has been submitted successfully."]);

} catch (Exception $e) {
    echo json_encode(value: ["error" => "Your inquiry has been submitted successfully."]);
}
