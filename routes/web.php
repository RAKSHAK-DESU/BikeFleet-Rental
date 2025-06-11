<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about.index',["name"=>"Rakshak"]);
});
Route::get('/clients', function () {
   $clients=[
    ["name"=>"Client 1","price"=>100,"id"=>1],
    ["name"=>"Client 2","price"=>100,"id"=>2],
    ["name"=>"Client 3","price"=>100,"id"=>3],
   ];
   return view('clients.index',['clients'=>$clients]);
});
Route::get('/clients/{id}', function ($id) {
    $clients = [
        ["name" => "Name : Chad", "price" => 1000, "id" => 1],
        ["name" => "Name : Alex", "price" => 100, "id" => 2],
        ["name" => "Name : Justin", "price" => 100, "id" => 3],
    ];

    return view('clients.clientdetail', ['client' => $clients[$id - 1]]);
});
/* 
Route::get('/clients/{id}', function ($id) {
   $clients=[
    ["name"=>"Client 1","price"=>100,"id"=>1],
    ["name"=>"Client 2","price"=>100,"id"=>2],
    ["name"=>"Client 3","price"=>100,"id"=>3],
   ];
   return view('clients.clientdetail',['client'=>$clients[$id-1]]);
});  */