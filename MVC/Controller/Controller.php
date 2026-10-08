<?php
require('./Model/Model.php');
class Controller extends Model{
    public function __construct(){
        parent::__construct();
        // echo "Controller class creatd";
    }

    public function createProduct(){
        include('View/ProductCreate.php');
    }

    public function storeProduct(){
          
          $flag=$this->insertData("products",$_REQUEST);
          if($flag){
              header("Location:http://localhost/employeeProject/MVC/index.php/productview");

          }
     }

     public function viewProducts(){
        $productArray = $this->selectData('products');
        include('View/Product.php');
     }


     public function deleteProduct(){
        $pid= $_REQUEST['pid'];
        $flag =$this->deleteData('pid',$pid,"products");
        if($flag){
             header("Location:http://localhost/employeeProject/MVC/index.php/productview");
        }
     }

     public function editProduct(){
          $pid = $_REQUEST['pid'];
          $singleProduct=$this->selectWhere("products","pid",$pid);
          include('View/productEdit.php');
     }

     public function updateProduct(){
         echo "<pre>";
         print_r($_REQUEST);
         $flag =$this->updateData("products",[
            'productname'=>$_REQUEST['productname'],
            'price'=>$_REQUEST['price'],
            'category'=>$_REQUEST['category'],
            'stock'=>$_REQUEST['stock']
            ],['pid'=>$_REQUEST['pid']]);
            if($flag){
                     header("Location:http://localhost/employeeProject/MVC/index.php/productview");
            }
     }
}


?>