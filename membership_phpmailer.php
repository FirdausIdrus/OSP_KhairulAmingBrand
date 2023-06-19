<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Connection to phpmyadmin. Change the details depending on database schema.
$conn = mysqli_connect("localhost", "root", "", "osp_website");

// Generate random membership number and password
$membershipNo = mt_rand(100000, 999999); // Generates a random 6-digit number
$password = mt_rand(100000, 999999); // Generates a random 6-digit number

// Insert the generated data into the database
$query = "INSERT INTO membership_data (membership_no, password) VALUES ('$membershipNo', '$password')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>
    alert('You have been successfully registered. Please check your email.');
    document.location.href = 'index.php';
    </script>";
    
} else {
    echo "<script>
    alert('Registration unsuccessful. Please try again');
    document.location.href = 'index.php';
    </script>";
}

// Close the database connection
mysqli_close($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);
  
    try {
        // Configure the SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'izzulizzani2000@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'yasxtufcjeadainm'; // Generated 2 factor authentication password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
  
        // Retrieve form data
        $email = $_POST['email'];
  
         // Set email subject and body
        $subject = "Khairul Aming Membership Registration Successful!";
        $body = "
        Congratulations on becoming a member of Khairul Aming's website! 
        We are thrilled to have you as a part of our culinary community, dedicated to spreading the remarkable flavors of Khairul Aming's cooking.
            
        Your Membership Details:
        Membership Number: $membershipNo
        Password: $password
            
        Please keep these details safe and secure as they will be required for accessing your membership benefits on Khairul Aming's website.
            
        By joining our membership program, you gain access to an array of exclusive benefits, including inspiring recipes, cooking tips, and engaging discussions.
        Prepare to embark on a flavorful journey that will ignite your passion for the culinary arts.
        We encourage you to explore our website thoroughly and discover the wealth of resources available to you.
        From tantalizing recipes to helpful tutorials, we strive to provide you with the tools and inspiration to enhance your cooking skills and create unforgettable meals.
            
        Should you have any questions or need assistance along the way, our support team is always here to help.
        Simply reach out to us at khairul_aming_team@gmail.com, and we'll be delighted to assist you.
            
        Once again, welcome to Khairul Aming's culinary community!    
        We cannot wait to see the delectable creations you'll whip up and the joy you'll bring to your dining table.
            
        Happy cooking!
            
        Best regards,
        Khairul Aming Team";

  
         // Set email sender and recipient
         $mail->setFrom('izzulizzani2000@gmail.com'); // Replace with your Gmail address
         $mail->addAddress($email); // Replace with the recipient email address
  
         $mail->Subject = $subject;
         $mail->Body = $body;

         // Send the email
         $mail->send();
  

         // Email sent successfully
         echo 
         " 
         <script> 
         alert('Thank you for registering with us. Please check your email for confirmation message.'); 
         document.location.href = 'index.php';
         </script> 
         ";
        
     } 
     catch (Exception $e) {
         // Failed to send email
         echo 
         " 
         <script> 
         alert('An error occurred. Please try again later.'); 
         document.location.href = 'index.php';
         </script> 
         ";
     }
 }
?>