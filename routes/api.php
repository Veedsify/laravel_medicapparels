<?php

use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\ImageUploader;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

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


Route::post('/shop/all', [ShopController::class, 'all']);

Route::post('/upload_product_image', [ImageUploader::class, 'upload']);

Route::post('/update_db_cart', [ProductCartController::class, 'updateCart']);

Route::post('/remove_product_image', [ProductsController::class, 'unlinkImageFromProduct']);

Route::get("/validate_address", function (Request $request) {
    $client = new Client();

    $response = $client->request('GET', 'https://express.api.dhl.com/mydhlapi/test/address-validate', [
        'query' => [
            'type' => 'delivery',
            'countryCode' => 'NG',
            'cityName' => 'okigwe',
            'postalCode' => '441103'
        ],
        'headers' => [
            'Authorization' => 'Basic ' . base64_encode('apY5uS0kD6uG2y:J!7nX$3xI!6tW#5d')
        ]
    ]);

    return $response->getBody();
    // try {
    //     $response = $client->request('GET', 'https://express.api.dhl.com/mydhlapi/test/rates', [
    //         'query' => [
    //             'accountNumber' => '365014869',
    //             'originCountryCode' => 'NG',
    //             'originCityName' => 'Lagos',
    //             'destinationCountryCode' => 'NG',
    //             'destinationCityName' => 'Imo',
    //             'length' => '0.39624',
    //             'weight' => '1',
    //             'width' => '0.39624',
    //             'height' => '0.39624',
    //             'plannedShippingDate' => '2024-02-6',
    //             'isCustomsDeclarable' => 'false',
    //             'unitOfMeasurement' => 'metric'
    //         ],
    //         'headers' => [
    //             'Authorization' => 'Basic ' . base64_encode('apY5uS0kD6uG2y:J!7nX$3xI!6tW#5d')
    //         ]
    //     ]);
    //     return $response->getBody();
    // } catch (\Exception $e) {
    //     Log::error($e->getMessage());
    //     return $e->getMessage();
    // }
});
