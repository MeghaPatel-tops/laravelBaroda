<?php

  //same name

   abstract class Area
   {
  
       abstract public function FindArea();
   }

   class Circle extends Area{
        public function __construct($r){
            $this->r=$r;
        }
        public function FindArea(){
            echo "<br> area of circle=".($this->r*$this->r*3.14);
        }
   }

   class Rect extends Area{
        public function __construct($l,$b){
            $this->l=$l;
            $this->b=$b;
        }
         public function FindArea(){
            echo "<br> area of rect=".($this->l*$this->b);
        }
   }    

   $c1= new Circle(2);
   $c1->FindArea();

   $r1= new Rect(2,3);
   $r1->FindArea(12,34);


?>