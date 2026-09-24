<?php

   $connection = new mysqli('localhost','root','','phpbaordadb');
   if($connection){
      echo "success";
   }
   else{
      echo "fail";
   }
  
?>