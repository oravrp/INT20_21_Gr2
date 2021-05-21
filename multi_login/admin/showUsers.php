<?php 
//include "../functions.php";
$db = mysqli_connect('localhost', 'root', '', 'multi_login');
$query="SELECT id,username,email,user_type FROM users;";
    $result=mysqli_query($db,$query);
    if(!$result){
    	die("Data cannot be fetched!" .mysqli_error($conn));
    }
    if(mysqli_num_rows($result)>0){
    	while($rows=mysqli_fetch_assoc($result)){
                echo "<tr>
                <td style='padding: 20px;'>" . $rows ['id'] . "</td>
                <td style='padding: 20px;'>" . $rows ['username'] . "</td>
                <td style='padding: 20px;'>" . $rows ['email']. "</td>
                <td style='padding: 20px;'>" . $rows ['user_type']. "</td>
                </tr>";
    		}
    	}
?>