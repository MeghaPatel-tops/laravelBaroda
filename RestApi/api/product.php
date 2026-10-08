<?php
include('../config/db.php');

//get=>return product array
//get:id=>return single product
//post=>insert
//delete:id=>product delete
//put=>update product

    header("Content-Type: application/json");

$method= $_SERVER['REQUEST_METHOD'];
if ($method == "POST" && isset($_POST['_method'])) {
    $method = strtoupper($_POST['_method']);
}

if($method == "POST"){
    
   try{
       if($_FILES['image']['name']){
         $filename = $_FILES['image']['name'];
         $temp= $_FILES['image']['tmp_name'];
         move_uploaded_file($temp,"../Images/".$filename);
        $pname= $_POST['productname'];
        $price= $_POST['price'];
        $descripation= $_POST['descripation'];
         $query = "insert into products(productname,price,descripation,image)values('$pname','$price','$descripation','http://localhost/employeeProject/restapi/Images/$filename')";
         $con->query($query);
         $res =[
            'status'=>true,
            'message'=>"Product created"
         ];
    }

    //php array to json convert
    echo json_encode([$res]);
   }
   catch(Exception $err){
       echo json_encode($err->getMessage());
   }
}

if($method=="GET"){
    try{

        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($url, '/'));

        // Get last value from URL
        $id = end($parts);

        if(is_numeric($id)){
            $query = "select * from products where pid=$id";
            $request = $con->query($query);
            $row= $request->fetch_object();
            echo json_encode($row);
        }
        else{
             $query = "select * from products";
        $request = $con->query($query);
        $productArray=[];
        while($row= $request->fetch_object()){
            $productArray[]=$row;
        }
        echo json_encode($productArray);
        }


       
    }catch(Exception $err){
       echo json_encode($err->getMessage());
   }
}

if($method=="DELETE"){
     try{

        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($url, '/'));

        // Get last value from URL
        $id = end($parts);

        if(is_numeric($id)){
            $query = "delete from products where pid=$id";
            $req = $con->query($query);
              $res =[
            'status'=>true,
            'message'=>"Product Deleted"
         ];
                echo json_encode($res);
        }
     }
     catch(Exception $err){
        echo json_encode($err->getMessage());
     }    
}

if ($method == "PUT") {

    try {

        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($url, '/'));

        // Get ID from URL
        $id = end($parts);

        $pname = $_POST['productname'];
        $price = $_POST['price'];
        $descripation = $_POST['descripation'];

        if (isset($_FILES['image']) && $_FILES['image']['name']) {

            $filename = $_FILES['image']['name'];
            $temp = $_FILES['image']['tmp_name'];

            move_uploaded_file($temp, "../Images/" . $filename);

            $query = "UPDATE products SET
                        productname = '$pname',
                        price = $price,
                        descripation = '$descripation',
                        image = 'http://localhost/employeeProject/restapi/Images/$filename'
                      WHERE pid = $id";

        } else {

            // Update without image
            $query = "UPDATE products SET
                        productname = '$pname',
                        price = $price,
                        descripation = '$descripation'
                      WHERE pid = $id";
        }

        if ($con->query($query)) {

            $res = [
                'status' => true,
                'message' => "Product updated"
            ];

        } else {

            $res = [
                'status' => false,
                'message' => "Product not updated",
                'error' => $con->error
            ];
        }

        echo json_encode($res);

    } catch (Exception $err) {

        echo json_encode([
            'status' => false,
            'message' => $err->getMessage()
        ]);
    }
}




?>