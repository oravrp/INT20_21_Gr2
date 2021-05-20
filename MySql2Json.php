<?php
require_once "multi_login/functions.php"; 

$query = "SELECT * FROM users;";
$result = mysqli_query($db,$query);
$user_data = array();
while($row = mysqli_fetch_array($result))
{
    $user_data[] = array(
        'id' => $row["id"],
        'username' => $row["username"],
        'email' => $row["email"],
        'password_1' => $row["password_1"],
        'password_2' => $row["password_2"]
    );

}
$encoded = json_encode($user_data);

$fileName = "Users.json";
if(file_put_contents($fileName,$encoded))
{
    echo $fileName ." file has been created";
}
else
{
    echo $fileName ." file has not been created";
}



?>