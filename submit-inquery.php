<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$uploadDir = 'uploads/';
$fileName = basename($_FILES['inqueryfile']['name']);

$filePath = $uploadDir . $fileName;

$allowedTypes = ['application/pdf']; // Add more allowed types
if (!in_array($_FILES['inqueryfile']['type'], $allowedTypes)) {
    // echo json_encode(["message" => "Invalid file type. Only PDFs , DOCs and DOCXs are allowed."]);
    // exit;
}

if (move_uploaded_file($_FILES['inqueryfile']['tmp_name'], $filePath)) {
    // echo json_encode(["message" => "Your application has been submitted successfully!"]);
    // exit;

}   

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'foramdelvadiya@gmail.com'; // Your email
    $mail->Password = 'mpaj rezl tplg cxje'; // Your password or App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('foramdelvadiya@gmail.com', $_REQUEST['name']);
    $mail->addAddress($_REQUEST['email']);  // Add recipient

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Inquiry Details';
    $html = 'Name: ' . $_REQUEST['name'] . '<br>' .
            'Email: ' . $_REQUEST['email'] . '<br>' .
            'Phone Number: ' . $_REQUEST['phone'] . '<br>' .
            'Description: ' . $_REQUEST['desc'];

    $mail->Body = $html;

    
    // Add attachment (if file exists)
    if (file_exists($filePath)) {
        $mail->addAttachment($filePath, $fileName);  // Add file attachment
    } else {
        echo 'File not found.';
        exit;
    }

    // Send the email
    if ($mail->send()) {
        echo json_encode(["message" => "Success! Our team will contact you soon."]);
    } else {
        echo json_encode(["message" => "Email could not be sent. Error: {$mail->ErrorInfo}"]);
    }

} catch (Exception $e) {
    echo json_encode(["message" => "Email could not be sent. Error: {$e->ErrorInfo}"]);
}
?>
