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
            include('View/ProductCreate.php');

        break;
        case 'productstore':
             $obj->createProduct();

        break;
         case 'home':
            echo "Home page";
        break;    
    }
    



?>