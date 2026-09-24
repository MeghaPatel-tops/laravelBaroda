<?php
session_start();
     if(isset($_SESSION['user'])){
          echo "<pre>";
          print_r($_SESSION['user']);
     }
     else{
         header("Location:login.php");
     }


?>