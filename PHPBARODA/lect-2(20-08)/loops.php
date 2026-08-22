/*
  for,while,do while

  3.part init condition modification


*/
<?php
   echo "<h1>While loop example:Entry control loop</h1>";
   $i=1;//init
   while($i<=10){//condition
        echo "i=".$i."<br>";
        $i++;//modification
   }

   echo "<h1>for loop example:Entry control loop</h1>";
   for($j=1;$j<=10;$j++){
          echo "j=".$j."<br>";
   }

    echo "<h1>do-while loop example:exit control loop</h1>";
    $k=15;
    do{
        echo "k=".$k."<br>";
        $k++;
    }while($k<=10);

?>