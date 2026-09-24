<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         function test(){
            try{
               $con = new mysqli("localhost","root","","mdb");

            }
            catch(Exception $e){
                 echo "Not able to connect db";
            }
         }


         test();

         echo "<br>task done";
    
    ?>
</body>
</html>