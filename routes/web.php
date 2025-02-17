<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //resources/views/welcome.blade.php
    //return "Hello, Laravel!"; //used to test database connection issue 
});
