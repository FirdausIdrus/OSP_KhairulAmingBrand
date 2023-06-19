<?php

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $mailTo = "firdausidrus02@gmail.com";
    $headers = "From: ".$email;
    $txt = "You got a new subscription: ".$email;

    mail($mailTo,"New Subscription", $txt, $headers);

    header("Location: index.php?SubscriptionDone");
}
?>