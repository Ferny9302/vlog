<?php

use Illuminate\Support\Facades\Route;
//ENDPOINT
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contact", function(){
    return view('contact');
});
Route::get("/post", function(){
    return view('post');
});
Route::get("/about", function(){
    return view('about');
});
Route::group(['prefix'=>'dashboard'],function(){
    Route::get("/", function(){
        return view('admin.dashboard');
    });
    Route::get("/users", function(){
        return view('admin.users');
    });
});

