<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		<?php include "../style.css" ?>
		.header {
			background: #4995A3;
		}
		button[name=register_btn] {
			background: #4995A3;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Delete user</h2>
	</div>
	
	<form method="post" action="">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
        <div class="input-group">
			<button type="submit" class="btn" name="delete_btn"> + Delete user</button>
		</div>
	</form>
</body>
</html>
<?php 

if(isset($_POST['delete_btn'])) {
    $User = $_POST['username'];
    $EmailId = $_POST['email'];
    $RoleType = $_POST['user_type'];
    $query1 = "SELECT * FROM users WHERE email like '$EmailId' and username like '$User'";
        $result1 = $db->query($query1);
        if(strlen($User)<8) {
            echo '<div class="error">';
            echo "<h3 style = 'text-align: center;'>Username must be at least 8 characters</h3>";
            echo '</div>';
			}
        if ($result1->num_rows == 0){
            echo '<div class="error">';
            echo "<h3 style = 'text-align: center;'>User not found</h3>";
            echo '</div>';
			}
        else {
        $query = "DELETE FROM users where username like '$User' and email like '$EmailId' and
        user_type like '$RoleType'";
        $rezultati = mysqli_query($db, $query);
        if($rezultati){
        $_SESSION['success']  = "User was successfully Deleted!!";
        header('location: home.php');
    }
}
}
?>