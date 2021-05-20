<?php
	include '../functions.php';
	function search($text,$db){
		$text = htmlspecialchars($text);
        
		$query = "SELECT id,username,email,user_type FROM users WHERE 
		username like '%$text%';";
		$get_query  = mysqli_query($db, $query );
        if(mysqli_num_rows($get_query) > 0) {
            echo mysqli_num_rows($get_query);
            while($rows = mysqli_fetch_assoc($get_query)) {
                echo "<tr>
                <td style='padding: 20px;'>" . $rows ['id'] . "</td>
                <td style='padding: 20px;'>" . $rows ['username'] . "</td>
                <td style='padding: 20px;'>" . $rows ['email']. "</td>
                <td style='padding: 20px;'>" . $rows ['user_type']. "</td>
                </tr>";
            }
        }
	}
	search($_GET['txt'], $db);
	?>