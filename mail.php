<?php 
require 'vendor/autoload.php';
$name = '';
$emailFrom = '';
$subject = '';
$message = '';
use Exception as GlobalException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = 'New Message from Contact Page';
    $message = $_POST['message'];
}
$emailTo = 'helpairsense@gmail.com';
$body = ' You have recieved a new email from : '. $name . "\n". ' Email :  ' . 
$emailFrom . "\n\n". ' Message : ' .$message ;
if(mail($emailTo, $subject, $body)) {
     echo "Email sent succesfully. We will be in touch";
     try {
        $mail = new PHPMailer();
        $mail -> isSMTP();
        $mail -> SMTPAuth = true;
        $mail -> SMTPSecure = 'ssl';
        $mail -> Host = 'smtp.gmail.com';
        $mail -> Port = '465';
        $mail -> isHTML();
        $mail -> Username = 'helpairsense@gmail.com';
        $mail -> Password = 'projekti123';
        $mail -> setFrom('helpairsense@gmail.com');
        $mail -> Subject = 'No reply email';
        $mail -> Body = '<h3>Hello there ' . $name . "<br><br>". 'We recieved your email and we will contact you as soon as possible.
        Thank you for your time. Have a nice day</h3><br><br>
        <h3>This is a no reply email from our team so please do not reply to this</h3>';
        $mail -> addAddress($emailFrom);
        $mail -> send();
     }catch (GlobalException $e) {
         echo $e->getMessage();
     }
    }
else {
     echo 'Email sending failed :( Please try again';
 }

?>