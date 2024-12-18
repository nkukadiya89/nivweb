<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

    $uploadDir = 'uploads/';
    $fileName = basename($_FILES['resume']['name']);
    $filePath = $uploadDir . $fileName;
   

    // $allowedTypes = ['application/pdf']; // Add more allowed types
    // if (!in_array($_FILES['resume']['type'], $allowedTypes)) {
        // echo json_encode(["message" => "Invalid file type. Only PDFs , DOCs and DOCXs are allowed."]);
    //     exit;
    // }

    if (move_uploaded_file($_FILES['resume']['tmp_name'], $filePath)) {
        echo json_encode(["message" => "Your application has been submitted successfully!"]);
        exit;

    } else {
        echo json_encode(["message" => "File upload failed. Please try again."]);
        exit;

    }

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'foramdelvadiya@gmail.com'; // Your email
        $mail->Password = 'nhtg hqft xsps isqj'; // Your password or App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS
        $mail->Port = 587; // TCP port to connect to

        $mail->setFrom('foramdelvadiya@gmail.com', $_REQUEST['fname']);
        $mail->addAddress('recipient@example.com');    

        $mail->isHTML(true);
        $mail->Subject = 'Career Details';
        $html = 'First Name : '. $_REQUEST['fname'].'<br>'. 'Last Name :'.$_REQUEST['lname'].'<br>'.'Email : '.$_REQUEST['email'].'<br>'.'Phone Number : '.$_REQUEST['phone'];
        $mail->Body = $html;

        $mail->send();    
        
        echo json_encode(value: ["message" => "Your Details has been submitted successfully."]);
                        
        } catch (Exception $e) {
            echo json_encode(value: ["message" => "Your Details has been not submitted. EMailerrror: {$mail->ErrorInfo}"]);
        }
?>


