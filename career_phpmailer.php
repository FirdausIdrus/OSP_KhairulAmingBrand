<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);
  
    try {
        // Configure the SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'izzulizzani2000@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'yasxtufcjeadainm'; // Replace with your Gmail password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
  
        // Retrieve form data
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $phoneNumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $position = $_POST['position'];
  
        // Set email subject and body
        $subject = 'New Job Application';
        $body = "First Name: $firstName\n";
        $body .= "Last Name: $lastName\n";
        $body .= "Phone Number: $phoneNumber\n";
        $body .= "Email: $email\n";
        $body .= "Position: $position\n";
  
        // Set email sender and recipient
        $mail->setFrom('izzulizzani2000@gmail.com'); // Replace with your Gmail address
        $mail->addAddress('izzulizzani2002@gmail.com'); // Replace with the recipient email address
  
        $mail->Subject = $subject;
        $mail->Body = $body;
  
        // Add the uploaded file attachment
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $mail->addAttachment($fileTmpPath, $fileName);
        }

        // Send the email
        $mail->send();
  
        // Email sent successfully
        echo 
        " 
        <script> 
        alert('Thank you for your application. Your email has been sent.'); 
        document.location.href = 'career.php';
        </script> 
        ";
        
    } 
    catch (Exception $e) {
        // Failed to send email
        echo 'An error occurred. Please try again later.';
        echo 
        " 
        <script> 
        alert('An error occurred. Please try again later.'); 
        document.location.href = 'career.php';
        </script> 
        ";
    }
}
?>