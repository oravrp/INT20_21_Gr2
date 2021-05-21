<?php 
include 'dbconfig.php';
require 'vendor/autoload.php';
//---------------------------Send a mail to website email and a no reply to user -----------------
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
if(filter_var($emailFrom, FILTER_VALIDATE_EMAIL)) {

$emailTo = 'helpairsense@gmail.com';
$body = ' You have recieved a new email from : '. $name . "\n". ' Email :  ' . 
$emailFrom . "\n\n". ' Message : ' .$message ;
if(mail($emailTo, $subject, $body)) {
     echo "<h4 style = 'text-align: center;'>Email sent succesfully. We will be in touch </h4>";
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
     echo "<h4 style = 'text-align: center'>Email sending failed :(. Please try again <br></h4>";
 }
//----------------------------------Secure Contact inputs from SQL Injection ---------------------------------
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $emailFrom = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
}
    $sql = "INSERT INTO contactRegister (name, email, subjekti) values (?, ?, ?);";
    $statement = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement, $sql)) {
        echo "Sql error. Something failed <br>";
        echo "<br>". mysqli_error($conn);
    }else {
        mysqli_stmt_bind_param($statement, "sss", $name, $emailFrom, $subject);
        mysqli_stmt_execute($statement);
    }
}
else {
    
        echo "<h4 style = 'text-align: center'>Your email was not valid :(. Please try again <br></h4>";

}
?>