<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// route handles root endpoint
Route::get('/', function() {
    return response()->json([
        'message' => 'Hello, API!'
    ], 200);
});

//route handles user endpoint
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
