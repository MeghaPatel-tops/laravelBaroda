<?php

 $numArray = [23,2,1,45,3,6,7,356,67,89];

 //echo $sumOfArray = array_sum($numArray);

$sum=0;//0+1= 1   1+23=24 24+45=
$min =$numArray[0];//1
$max=$numArray[0];
foreach($numArray as $key){
      echo $key."<br>";
      $sum = $sum+$key;

      if($min > $key){// 
          $min = $key;
      }

      if($max<$key){
          $max=$key;
      }
}

echo "<br>sum=".$sum;
echo "<br>min=".$min;
echo "<br>max=".$max;

//min=23  key=0 23  23>23 =>min=23=>no
//min=23 key=1(index)   2  23> 2 =>yes min=key min=2
//min=2  key=2(index)   1  2>1 =>yes   min=key min=1



 



?>