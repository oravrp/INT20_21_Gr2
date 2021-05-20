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

    #box{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top:150px;
    }

    h1{
        
    }

</style>
</head>
<body>
    <div id="box">
    <h1>Change Your Password</h1>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="Enter your account email"/><br/>
        <input type="password" name="current_password" placeholder="Enter your Current password"/><br/>
        <input type="password" name="new_password" placeholder="Enter your new paswword"/><br/>
        <input type="submit" name="reset_btn" value="Reset password"/>
    </form>
    </div>
</body>
</html>

<?php 
include('functions.php');
 
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi_login');


if (isset($_POST['reset_btn'])) {
    
    $_email = $_POST['email'];
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];

        $currentPassword = md5($currentPassword);
        $newPassword = md5($newPassword);
        $query = "SELECT * FROM users WHERE email='$_email'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $db_password = $row['password'];

    if($db_password == $currentPassword){

        $edit = mysqli_query($db,"update users set password='$newPassword' where email='$_email'");

            if($edit)
            {
                mysqli_close($db);
                echo "password was changed";
                //header("location:login.php"); 
                exit;
            }
            else
            {
                echo "password couldnt be changed";
            }    	
     }

     else{
        echo "your current password entrie didnt match the password in the database";

     }
}


?>
