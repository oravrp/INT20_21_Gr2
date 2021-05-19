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
			<div style="display: inline;">
			<img src="../images/admin_profile.png">
			<form method="POST" action="" style="margin-left: 200px; border-style: none;">
			<input type="text" style="margin-left: 270px; margin-top: 0px;
			width: 200px;" placeholder="Search for a user/admin" name="username">
			<input type="submit" value="Search" style="width: 70px; margin-left: 10px;" name="search">
			</form>
			</div>
			<div style="padding-top: 40px;">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="font-size: 25px; margin-top: 50px;"><?php echo $_SESSION['user']['username']; ?></strong>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                        &nbsp; <a href="create_user.php"> + add user</a>
					<br><br><br><br>
					<?php 
					if(isset($_POST['search'])) {
					$request = mysqli_real_escape_string($db, $_POST['username']);
					$query="SELECT id,username,email,user_type FROM users WHERE 
					username like '%$request%';";
					$result=mysqli_query($db,$query);
					if(!$result){
						die("Data cannot be fetched!" .mysqli_error($conn));
					}
					if(mysqli_num_rows($result)>0){
						$numRows = mysqli_num_rows($result);
						echo "<p>Result with username like : " .  $request;
						echo "<h4>All users:</h4><br>";
						echo "<table class='table'>";
						echo "<tr> <thead>
							<th scope='col'>ID</th>
							<th scope='col'>Username</th>
							<th scope='col'>Email</th>
							<th scope='col'>User_type</th>
							</thead>
							</tr>";
						while($row=mysqli_fetch_assoc($result)){
							if($_SESSION['user']['username']!=$row['username']){
							echo "<tr>
								<td>".$row['id']."</td>
								<td>".$row['username']."</td>
								<td>".$row['email']."</td>
								<td>".$row['user_type']."</td>
								</tr>";
							}
						}
						echo "</table>";
					}else {
						echo "<p>There are no results with username like  : ". $request;
					}
				}else {
					$query="SELECT id,username,email,user_type FROM users;";
					$result=mysqli_query($db,$query);
					if(!$result){
						die("Data cannot be fetched!" .mysqli_error($conn));
					}
					if(mysqli_num_rows($result)>0){
						echo "<h4>All users:</h4><br>";
						echo "<table class='table'>";
						echo "<tr> <thead>
							<th scope='col'>ID</th>
							<th scope='col'>Username</th>
							<th scope='col'>Email</th>
							<th scope='col'>User_type</th>
							</thead>
							</tr>";
						while($row=mysqli_fetch_assoc($result)){
							if($_SESSION['user']['username']!=$row['username']){
							echo "<tr>
								<td>".$row['id']."</td>
								<td>".$row['username']."</td>
								<td>".$row['email']."</td>
								<td>".$row['user_type']."</td>
								</tr>";
							}
						}
						echo "</table>";
				}
			}
					?>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>