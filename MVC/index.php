<?php
    require('Controller/Controller.php');

    $obj = new Controller();

    

    $route_method = $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    $path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    $arrayPath = explode("/",$path);
    
    $routePath = $arrayPath[4];
    


    switch($routePath){
        case '':
            include('View/Adminindex.php');
        break;    
        case 'productcreate':
            $obj->createProduct();

        break;
        case 'productview':
            $obj->viewProducts();
        break;     
        case 'productstore':
             $obj->storeProduct();

        break;
        case 'productdelete':
             $obj->deleteProduct();
        break;     
         case 'home':
            echo "Home page";
        break;    
    }
    



?>