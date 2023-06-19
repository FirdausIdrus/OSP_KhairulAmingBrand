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
        $subject = 'Acknowledgement of Your Job Application';
        $body = "Dear Sir/Miss, thank you for your interest in joining our team at Khairul Aming Brand. We appreciate the time and effort you have invested in submitting your application.\n\n";
        $body .= "We have received your application, and we want to assure you that we are reviewing it thoroughly. Our hiring team will carefully assess your qualifications and experience in relation to the requirements of the role. We believe in providing equal opportunities to all applicants, and we are committed to selecting the most suitable candidate for the position.\n\n";
        $body .= "Here are the details you provided with your application:\n\n";
        $body .= "First Name: $firstName\n";
        $body .= "Last Name: $lastName\n";
        $body .= "Phone Number: $phoneNumber\n";
        $body .= "Email: $email\n";
        $body .= "Position: $position\n\n";
        $body .= "Rest assured that we will carefully review your application and get back to you soon. Please note that due to the high volume of applications we receive, the selection process may take some time. We appreciate your patience during this period.\n\n";
        $body .= "If your qualifications align with our requirements, we may contact you for further steps, such as an interview or additional assessments. However, if your application does not progress to the next stage, please do not be discouraged, as we keep all applications on file for future opportunities.\n\n";
        $body .= "If you have any additional questions or need further information, please feel free to reach out to us at khairul_aming_team@gmail.com.\n\n";
        $body .= "Once again, thank you for considering Khairul Aming Brand as your potential employer. We value your interest in our organization, and we look forward to the possibility of working together.\n\n";
        $body .= "Best regards,\n";
        $body .= "Khairul Aming Team";
  
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