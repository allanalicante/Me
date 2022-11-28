<?php
 ini_set('display_errors', 1); 
 ini_set('display_startup_errors', 1); 
 error_reporting(E_ALL);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $emailfrom = $_POST['email'];
        $message = $_POST['message'];
        $subject = "New Contact Form Inquiry";
        $recipient = "alicanteallan7@gmail.com";
        $headers = "From: "  .$emailfrom;
        $txt = "You have received an e-mail from " .$name.".\n\n".$message;

        mail($recipient, $subject, $txt, $headers);
        header("Location: index.php?mailsend=" .$message);
        echo "message sent";
       
    }
    else {
        echo "error";
        

    }

?>