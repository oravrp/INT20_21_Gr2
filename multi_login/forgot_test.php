<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
      <title>Password Recovery</title>
       <!-- CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
          <div class="card">
            <div class="card-header text-center">
            Type your email address and we will send an email with a recovery link
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <input type="submit" name="password-reset" class="btn btn-primary">
              </form>
            </div>
          </div>
      </div>
 
   </body>
</html>

<?php

if(isset($_POST['password-reset']) && $_POST['email'])
{
    include('functions.php');
     
    $emailId = $_POST['email'];
 
    $result = mysqli_query($db,"SELECT * FROM users WHERE email='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    #$update = mysqli_query($db,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    $link = "<a href='http://localhost:8080/PROJEKTI/multi_login/reset_test.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
   $update = mysqli_query($db,"UPDATE users
          SET 
          reset_link_token=' $token ' , exp_date='$expDate'
             
          WHERE
              email = '$emailId'");

    if(mail($emailId, 'Reset Password Link', $link)){
          echo '<script type="text/javascript"> alert("The link has been sent to your email address!") </script>';
        
        }
    else{
        echo '<script type="text/javascript"> alert("Gabim!") </script>';
    }
 

}
}
?>