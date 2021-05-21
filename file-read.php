<?php

$filename = "about.txt";

   if(file_exists($filename)){
   $content = file_get_contents($filename);
   echo $content;

   } else{
      echo substr("ERROR: File does not exist.", 0, 6);  
      echo substr("ERROR: File does not exist.",6);
   }


?>
