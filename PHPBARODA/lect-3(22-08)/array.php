<?php
   //array:collection of data
   echo "<h1>Types of Array</h1>";
   echo "<h2>Index array:key numeric</h2>";

   $fruits = ['apple','banana','kiwi'];
   echo "<pre>";
   print_r($fruits);

   echo "<h2>Assoicitaive array:key value form</h2>";
   
   $product = ['pname'=>'laptop','price'=>222222];
   echo "<pre>";
   print_r($product);

   echo "<h2>Multidimentional array</h2>";

   $subject=[
      'software'=>['front-end'=>['html','css','js']
                    ,"Back-end"=>['php','java','.net']
      
      
      
      ]
   ];
   print_r($subject);

   echo "<br>";
   echo $subject['software']['Back-end'][1];


   echo "<p>fruits array len=".count($fruits)."</p>";

   array_push($fruits,"mango");

   print_r($fruits);

   array_pop($fruits);
   print_r($fruits);

   array_shift($fruits);

   print_r($fruits);

   array_unshift($fruits,'watermallon');
   print_r($fruits);

   $a1=['apple','banana'];
   $b1=['potato','tomato'];

   $c1=array_merge($a1,$b1);

   print_r($c1);

   echo "<br>";

   echo in_array('kiwiiiiiiii',$fruits);

   $numArray = [12,2,34,56];
   rsort($numArray);
   print_r($numArray);

?>