<?php
$product = [
    "pid" => 101,
    "pname" => "Laptop",
    "price" => 50000,
    "category" => "Electronics"
];

echo "<pre>";

print_r(array_keys($product));

print_r(array_values($product));

echo array_key_exists('price',$product);

$product1 = [
    "pid" => 101,
    "pname" => "Laptop"
];

$product2 = [
    "price" => 50000,
    "category" => "Electronics"
];

$pro = array_merge($product1,$product2);
$pro1= array_combine($product1,$product2);

print_r($pro);
print_r($pro1);

$salary = [10000,12000,30000];

$newArray = array_map(function($index){
       return $index+500;
},$salary);

print_r($newArray);

$products = [
    [
        "pid" => 1,
        "pname" => "Laptop",
        "price" => 55000,
        "category" => "Electronics",
        "desc" => "High performance laptop"
    ],
    [
        "pid" => 2,
        "pname" => "Mobile",
        "price" => 25000,
        "category" => "Electronics",
        "desc" => "Latest smartphone"
    ],
    [
        "pid" => 3,
        "pname" => "T-Shirt",
        "price" => 1200,
        "category" => "Fashion",
        "desc" => "Cotton round neck T-shirt"
    ],
    [
        "pid" => 4,
        "pname" => "Running Shoes",
        "price" => 3500,
        "category" => "Footwear",
        "desc" => "Comfortable running shoes"
    ],
    [
        "pid" => 5,
        "pname" => "Backpack",
        "price" => 1800,
        "category" => "Accessories",
        "desc" => "Water resistant backpack"
    ]
];

print_r($products);

$filterArray = array_filter($products,function($index){
      if($index['category']=='Electronics'){
             return $index;
      }
});

print_r($filterArray);

$sumOfSalary = array_reduce($salary,function($sum,$index){
    $sum= $sum+$index;
    
    return $sum;
},0);

echo $sumOfSalary;


?>