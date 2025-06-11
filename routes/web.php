<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Rakshak"]);
});

Route::get('/clients', function () {
    $clients = [
        ["name" => "NeoVolt X1", "price" => 1200, "id" => 1, "image" => "/images/bikes/bike1.jpg"],
        ["name" => "AetherBlade 9000", "price" => 1500, "id" => 2, "image" => "/images/bikes/bike2.jpg"],
        ["name" => "Vortex Phantom", "price" => 1000, "id" => 3, "image" => "/images/bikes/bike3.jpg"],
    ];
    return view('clients.index', ['clients' => $clients]);
});

Route::get('/clients/{id}', function ($id) {
    $clients = [
        ["name" => "NeoVolt X1", "age" => "Available: ✅", "price" => 1200, "id" => 1, "image" => "/images/bike1.jpg"],
        ["name" => "AetherBlade 9000", "age" => "Available: ✅", "price" => 1500, "id" => 2, "image" => "/images/bike2.jpg"],
        ["name" => "Vortex Phantom", "age" => "Available: ✅", "price" => 1000, "id" => 3, "image" => "/images/bike3.jpg"],
    ];

    return view('clients.clientdetail', ['client' => $clients[$id - 1]]);
});
/*
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about.index',["name"=>"Rakshak"]);
});
Route::get('/clients', function () {
   $clients=[
    ["name"=>"Bike 1","price"=>100,"id"=>1],
    ["name"=>"Bike 2","price"=>100,"id"=>2],
    ["name"=>"Bike 3","price"=>100,"id"=>3],
   ];
   return view('clients.index',['clients'=>$clients]);
});  */
/* Route::get('/clients/{id}', function ($id) {
    $clients = [
        ["name" => "Name : Chad","age" =>"Available: ✅", "price" => 1000, "id" => 1],
        ["name" => "Name : Alex","age" => "Available: ✅", "price" => 100, "id" => 2],
        ["name" => "Name : Justin","age" =>"Available:  ✅", "price" => 100, "id" => 3],
    ];

    return view('clients.clientdetail', ['client' => $clients[$id - 1]]);
});  */
/* 
Route::get('/clients/{id}', function ($id) {
   $clients=[
    ["name"=>"Client 1","price"=>100,"id"=>1],
    ["name"=>"Client 2","price"=>100,"id"=>2],
    ["name"=>"Client 3","price"=>100,"id"=>3],
   ];
   return view('clients.clientdetail',['client'=>$clients[$id-1]]);
});  */