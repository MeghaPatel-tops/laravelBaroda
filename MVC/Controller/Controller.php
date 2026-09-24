<?php
require('./Model/Model.php');
class Controller extends Model{
    public function __construct(){
        parent::__construct();
        // echo "Controller class creatd";
    }

     public function createProduct(){
          
          $flag=$this->insertData("products",$_REQUEST);
          if($flag){
              header("Location:http://localhost/employeeProject/MVC/index.php/productview");

          }
     }
}


?>