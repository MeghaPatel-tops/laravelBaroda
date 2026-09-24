<?php
   session_start();
    if(isset($_SESSION['user'])){
        session_destroy();
        echo "here";
        header("Location:login.php");
    }

?>