<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// route listens to for a get request to the root URL and if it receives one, it returns a JSON response with a phone number, queues, status, and welcome text.
Route::get('/', function() {
    return response()->json([
        'phone_number' => '1234567890',
        'queues' => [
            [
                //queue id
                'id' => 'q1',
                //queue name
                'queue_name' => 'Family Medicine',
            ],
            [
                'id' => 'q2',
                'queue_name' => 'Pediatrics',
            ],
            [
                'id' => 'q3',
                'queue_name' => 'Dermatology',
            ]
        ],
        'status' => true,
        'welcome_text' => 'Welcome to the LA Hospital.'
    ], 200);

});

//route handles user endpoint
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
