<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'PHPMailer/PHPMAILER/src/Exception.php';
require 'PHPMailer/PHPMAILER/src/PHPMailer.php';
require 'PHPMailer/PHPMAILER/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'otuscopysystemsinc@gmail.com';   //SMTP write your email
    $mail->Password   = 'xnmgvhdvurvoidla';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('otuscopysystemsinc@gmail.com');     //Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = $_POST["subject"];   // email subject headings
    $mail->Body    = "<strong>Name: </strong>" .$_POST["name"]."<br><strong>Email: </strong>" .$_POST["email"]."<br><strong>Subject: </strong>" .$_POST["subject"]. "<br><br> <strong>Message: </strong>" .$_POST["message"]; //email message
    // $mail->Body    = "Name: $name<br>Email: $email<br><br>$message";

    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'contactus.php';
    </script>
    ";
}
?>