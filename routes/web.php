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


Route::view('/product','Product.index');

Route::resource('employee',EmployeeController::class);
