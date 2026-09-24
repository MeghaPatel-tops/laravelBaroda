<?php
    class Product{
        private $pid;
        public $productName;
        public $price;
        // public function __construct(){
        //      echo "Default con. called";
        // }

        public function __construct($pid,$pname,$price){
             $this->pid= $pid;
             $this->productName= $pname;
             $this->price= $price;
        }

        public function __destruct(){
            echo "<br>Destrcut method called<br>";
        }

        public function printProduct(){
            echo "<h1>ProductName:$this->productName</h1>";
             echo "<h2>Pid:$this->pid</h2>";
              echo "<h3>Price:$this->price</h3>";
        }
    }


    // $p1 = new Product();
    $p1 = new Product(101,"laptop","210000");
    $p1->printProduct();
    $p1->price=23000;
    $p1->printProduct();

    // echo $p1->pid;==>gen error


     echo "<hr>";

    $p2= new Product(102,"keybord","2000");
    $p2->printProduct();

?>