<?php

$filename = "about.txt";

   if(file_exists($filename)){
   $content = file_get_contents($filename);
   echo $content;

   } else{
   echo "ERROR: File does not exist.";
   }


?>
