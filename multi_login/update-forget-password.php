<?php
if (isset($_POST['password']) || $_POST['reset_link_token'] || $_POST['email']) {
    include('functions.php');
    $emailId  = $_POST['email'];
    $token    = $_POST['reset_link_token'];
    $password = md5($_POST['password']);
    
   
   if(
        mysqli_query($db, "UPDATE users set  password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='" . $emailId . "'")
       ){
        echo '<p>Congratulations! Your password has been updated successfully.</p>';
       }
       else{

       
        echo "<p>Something goes wrong. Please try again</p>";
       }
}
?>