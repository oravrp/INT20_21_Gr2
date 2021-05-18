<?php

if (isset($_POST['submit'])){
    $message = $_POST['idea'];
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $message);
    fclose($myfile);
}

?>

