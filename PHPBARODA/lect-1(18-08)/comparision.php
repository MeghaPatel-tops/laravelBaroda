<?php
     echo 1 > 3;

     echo "<br>";

     echo 10==110;


     $x= 100;//int
     $y="100";//string

      echo "<br>";

     echo $x===$y;


     $m=10;
     $n;
     

     //$n = $m++;//post increment first value assign to n then incre
     $n= ++$m;//first incre and then assign to n;

     echo $n;

//Logical operator

      $a=1;
      $b=12;

      echo "<br>logical and=".($a >= 10 && $b >= 10);
      echo "<br>logical or=".($a >= 10 || $b >= 10);

     /*
          login se(&&)
          username  pwd  loginsuccess
          true      true      true
          true      false     false
          false     true      false
          false     false     false

          (!!)
          email   phone   access
          true      true      true
          true      false     true
          false     true      true
          false     false     false

          !  
          0 1
          1 0
     */ 

?>