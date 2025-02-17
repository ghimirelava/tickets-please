<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// route listens to for a get request to the root URL and if it receives one, it returns a JSON response with a message.
Route::get('/', function() {
    return response()->json([
        'message' => 'Hello, API!'
    ], 200);

});


//route handles user endpoint
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
