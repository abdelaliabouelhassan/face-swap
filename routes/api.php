<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/generate', function () {
    $replicateApiToken = '21c24abe7913a01025d3f030399702f07b62d451'; // Replace with your actual API token

    $response = Http::withHeaders([
        'Authorization' => 'Token ' . $replicateApiToken,
        'Content-Type' => 'application/json',
    ])->post('https://api.replicate.com/v1/predictions', [
        'version' => 'd5900f9ebed33e7ae08a07f17e0d98b4ebc68ab9528a70462afc3899cfe23bab',
        'input' => [
            'weight' => 0.5,
            'cache_days' => 10,
            'det_thresh' => 0.1,
            'request_id' => 'aa6a2aad-90ec-4c00-b90b-89f4d62e6b84',
            "local_source" => "https://replicate.delivery/pbxt/JkUYWp60oNwz1SF9AJvJPv7upLqucTyaeCxQ07qZGijlDKxt/face_swap_09.jpg",
            "local_target" => "https://upload.wikimedia.org/wikipedia/commons/7/75/Asmongold_in_2022.jpg"
            // 'target_image' => 'https://replicate.delivery/pbxt/JkUYWp60oNwz1SF9AJvJPv7upLqucTyaeCxQ07qZGijlDKxt/face_swap_09.jpg',
        ],
    ]);

    // Access the response content
    $responseData = $response->json();

    // Handle the response as needed
    return $responseData;
});
