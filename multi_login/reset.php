<!DOCTYPE html>
<html>
<head>
<title>Paswword reset</title>
<style>
    body{
        background-color: whitesmoke;
        
    }
    input{
        width:250px;
        border: 1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 15px 0px 15px 0px;
    }

    #bd{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 250px 50px 20px;
    }

    #box{
        background: light-blue;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        justify-content: center;
        align-items: center;
        text-align: center;
        width:500px;
        height:350px;
    }

    input[type=submit] {
    width: 50%;
    background-color: #4995A3;
    color: white; 
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
  background-color: #10637b;
}
   
h1 {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: bold;
    margin: 20px;
}

.error {
	width: 500px; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: center;
}


    
</style>
</head>
<body>
    <div id="bd">
    <div id="box">
    <h1>Change Your Password</h1>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="Enter your account email"/><br/>
        <input type="password" name="current_password" placeholder="Enter your current password"/><br/>
        <input type="password" name="new_password" placeholder="Enter your new paswword"/><br/>
        <input type="submit" name="reset_btn" value="Reset password"/>
    </form>
    </div>
</div>
</body>
</html>

<?php include('functions.php');
 
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

$errors   = array(); 

if (isset($_POST['reset_btn'])) {

    
    $_email = $_POST['email'];
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];

    if (empty($_email)) { 
		array_push($errors, "Email is required"); 
	}
    else{
        $query = "SELECT * FROM users WHERE email='$_email'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $db_password = $row['password'];
    }

    if (empty($currentPassword)) { 
		array_push($errors, "Password is required"); 
    }

    if (empty($newPassword)) { 
		array_push($errors, "Password is required");

	}elseif(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $newPassword)){
        array_push($errors,"Password must be 8-20 characters long,Uppercase letter,number and a special symbol.");
	}

        $currentPassword = md5($currentPassword);
        $newPassword = md5($newPassword);

        if (count($errors) == 0){

    if($db_password == $currentPassword){

        $edit = mysqli_query($db,"update users set password='$newPassword' where email='$_email'");

            if($edit)
            {
                mysqli_close($db);

                echo '<script type="text/javascript"> alert("Youre Password has been changed") </script>';
                
                exit;
            }

            else
            {
                echo '<script type="text/javascript"> alert("Youre Password couldnt be changed") </script>';
            }    	
     }

     else{

        echo '<script type="text/javascript"> alert("Youre current password entrie does not match the password in our database, try again") </script>';
        }
    }

    else{
        echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
    }
}


?>
