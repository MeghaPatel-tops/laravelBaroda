<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CommanController;

Route::get('/', function () {
    return "hello wolrd";
});

Route::get('/test',function(){
    return "welcome to laravel";
});

Route::get('/sec',function(){
    return "route redirect from other route";
});

Route::redirect('/first','/sec');

Route::get('/testmethod',[CommanController::class,'testMethod'])->name('getdata');

Route::view('/home','test' ,['name'=>'abc']);

Route::get('user/{id}',function(string $id){
    echo "userid:".$id;
})->where('id', '[0-9]+');
$products = [
    [
        "id" => 1,
        "pname" => "Laptop",
        "price" => 59999.99,
        "desc" => "High-performance laptop with 16GB RAM and 512GB SSD."
    ],
    [
        "id" => 2,
        "pname" => "Smartphone",
        "price" => 24999.50,
        "desc" => "5G smartphone with AMOLED display and 128GB storage."
    ],
    [
        "id" => 3,
        "pname" => "Wireless Mouse",
        "price" => 999.00,
        "desc" => "Ergonomic wireless mouse with USB receiver."
    ],
    [
        "id" => 4,
        "pname" => "Bluetooth Headphones",
        "price" => 3499.99,
        "desc" => "Noise-cancelling Bluetooth headphones with 30-hour battery."
    ],
    [
        "id" => 5,
        "pname" => "Mechanical Keyboard",
        "price" => 2799.00,
        "desc" => "RGB mechanical keyboard with blue switches."
    ]
];

Route::view('/product','Product.index',['products'=>$products]);






Route::resource('employee',EmployeeController::class);

Route::view('/homepage','home',['auth'=>true,'loader'=>true,'product'=>["p1","p2"]]);

Route::view('/admin','admin.index')->name('dashbord');

Route::view('/category','admin.category')->name('category');

Route::view('/product','admin.product')->name('product');