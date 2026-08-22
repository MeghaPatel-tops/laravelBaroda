<?php
//basic dunction
      function test(){
          echo "<h1>Hello msg</h1>";
      }

      test();

     //function with parameter  //default parameter
     function add($a,$b,$m=0){
        $c= $a+$b+$m;
         echo "<h1>add= ".$c."</h1>";
     } 

     add(12,23);
     add(1,2,3);

     //function as returning value
     function squareFind($num){
         return $num*$num;
     }

     $sq=squareFind(12);
     echo $sq;


?>