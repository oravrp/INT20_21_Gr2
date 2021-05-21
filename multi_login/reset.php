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
    margin: 150px 50px 20px;
}
#box{
    background: light-blue;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    justify-content: center;
    align-items: center;
    text-align: center;
    width:520px;
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

.message{
    width: 500px; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #00cc00; 
	color: #00cc00; 
	background: #e6ffe6; 
	border-radius: 5px; 
	text-align: center;
}

.msg1 {
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
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

$errors   = array();
$db_password ="";

if (isset($_POST['reset_btn'])) { 

    $_email = $_POST['email'];
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    if (empty($_email)) { 
		array_push($errors, "Email is required"); 
	}
    else{
        $query1 = "SELECT email FROM users WHERE email='$_email'";
        $result1 = $db->query($query1);
        if ($result1->num_rows == 0){
            array_push($errors, "Email entered was not correct");
        }
        else{
            $query = "SELECT * FROM users WHERE email='$_email'";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);
            $db_password = $row['password'];
        
    
            if (empty($currentPassword)) { 
                array_push($errors, "Password is required"); 
            }else{
                $currentPassword = md5($currentPassword);
                if($db_password != $currentPassword){
                    array_push($errors,"Your current password entrie was not correct.");
                }
            }
            if (empty($newPassword)) { 
                array_push($errors, "Password is required");
            }elseif(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $newPassword)){
                array_push($errors,"Password must be 8-20 characters long,Uppercase letter,number and a special symbol.");
            }
        }
    }

        $newPassword = md5($newPassword);


     if (count($errors) == 0){

        $edit = mysqli_query($db,"update users set password='$newPassword' where email='$_email'");

            if($edit)
            {
                mysqli_close($db);
                $msg = "Your password has been changed";
                echo '<div class="message">';
				echo $msg;
		        echo '</div>';
                exit;
            }
            else
            {
                $msg1 = "Your password couldnt be changed";
                echo '<div class="errormessage">';
				echo $msg1;
		        echo '</div>';
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
