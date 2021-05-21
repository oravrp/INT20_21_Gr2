<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
	.header {
		background: #4995A3;
	}
	button[name=register_btn] {
		background: #003366;
	}
	.table{
		width: 600px;
	}
	form, .content {
		width: 70%;
	}
	#searchUser {
		border: 2px solid black;
		border-radius: 5px;
		height: 30px;
	}
	#searchUser:focus {
		border-bottom-color: cornflowerblue;
	}
	</style>
</head>
<body>
	<div class="header">
	<?php
		$str = 'Hello User!';
		$pattern = '/user/i';
		echo preg_replace($pattern, $_SESSION['user']['username'], $str);
	?>
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<div>
			<img src="../images/admin_profile.png">
			</div>
			<div style="padding-top: 40px;">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="font-size: 25px; margin-top: 30px;"><?php echo $_SESSION['user']['username']; ?></strong>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                        &nbsp; <a href="create_user.php"> + add user</a>
						<a href="delete_user.php"> - delete user </a>
					<br><br><br><br>
				<?php endif ?>
				<input type="text" id="searchUser" style="position: absolute; right: 400px; top: 250px;
				width: 200px;"
			 placeholder="Search for a user/admin" name="username">
			</div>
		</div>
		<div style="margin-top: 0px;">
		<h3 style="margin-left: 175px;" id="listUsers">List of  users/admins </h3>
		<table style="margin-left: auto; margin-right: auto; text-align: center; margin-top: 50px;">
		<thead>
		<tr>
		<th style="padding: 0px 20px 0px 20px;">Id</th>
		<th style="padding: 0px 20px 0px 20px;">Username</th>
		<th style="padding: 0px 20px 0px 20px;">Email</th>
		<th style="padding: 0px 20px 0px 20px;">User-Type</th>
		</tr>
		</thead>
		<tbody id="usersTable">
		<?php 
		include "showUsers.php";
		?>
		</tbody>
		</table>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$('#searchUser').keyup(function(){
			//console.log($("#usersTable").html());
            var text = $("#searchUser").val();
            if( text != ""){
				$('#usersTable').html(' ');
           		 $.ajax({
                type: "GET",
                url: "searchUser.php",
                data: 'txt=' + text,
                success: function(data){
                    $('#usersTable').append(data);
                }
            })
            }else {
				$('#usersTable').html(' ');
				$.ajax({
                type: "GET",
                url: "showUsers.php",
                data: 'txt=' + text,
                success: function(data){
                    $('#usersTable').append(data);
                }
			}
				)
		}
	})
});</script>	
</body>
</html>