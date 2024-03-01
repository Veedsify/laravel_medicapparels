<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client; // Add this import statement
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    //
    public function shippingRates(Request $request)
    {

        $request->validate([
            'checkoutcity' => 'required|string|max:255',
            'checkoutcountry' => 'required|string|max:255',
            'checkkoutstreet' => 'required|string|max:255',
        ]);


        $client = new Client();
        try {
            $response = $client->request('GET', 'https://express.api.dhl.com/mydhlapi/test/rates', [
                'query' => [
                    'accountNumber' => '365014869',
                    'originCountryCode' => 'NG',
                    'originCityName' => 'Lagos',
                    'destinationCountryCode' => 'US',
                    'destinationCityName' => strval($request->checkoutcity),
                    'length' => '2',
                    'weight' => strval($request->weight),
                    'width' => '2',
                    'height' => '2',
                    'plannedShippingDate' => date('Y-m-d', strtotime('+1 day')),
                    'isCustomsDeclarable' => 'false',
                    'unitOfMeasurement' => 'metric'
                ],
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode('apY5uS0kD6uG2y:J!7nX$3xI!6tW#5d')
                ]
            ]);
            return $response->getBody();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function addressValidation()
    {
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
    }
}


// $response = $client->request('POST', 'https://express.api.dhl.com/mydhlapi/test/rates', [
//     'query' => [
//         "customerDetails" => [
//             "shipperDetails" => [
//                 "postalCode" => "048582",
//                 "cityName" => "SINGAPORE",
//                 "addressLine1" => "Blk 6 Lock Rd",
//                 "addressLine2" => "02-10 Gillman Barracks",
//                 "addressLine3" => "Barrack Street",
//                 "countryCode" => "SG"
//             ],
//             "receiverDetails" => [
//                 "postalCode" => "75001",
//                 "cityName" => "PARIS",
//                 "addressLine1" => "9",
//                 "addressLine2" => "Rue Simart",
//                 "countryCode" => "FR"
//             ]
//         ],
//         "accounts" => [
//             [
//                 "typeCode" => "shipper",
//                 "number" => env('DHL_ACCOUNT_NUMBER')
//             ]
//         ],
//         "productsAndServices" => [
//             [
//                 "productCode" => "P",
//                 "localProductCode" => "P"
//             ]
//         ],
//         "payerCountryCode" => "SG",
//         "plannedShippingDateAndTime" => "2022-11-20T13:00:00GMT+00:00",
//         "unitOfMeasurement" => "metric",
//         "isCustomsDeclarable" => true,
//         "monetaryAmount" => [
//             [
//                 "typeCode" => "declaredValue",
//                 "value" => 100,
//                 "currency" => "SGD"
//             ]
//         ],
//         "estimatedDeliveryDate" => [
//             "isRequested" => true,
//             "typeCode" => "QDDC"
//         ],
//         "getAdditionalInformation" => [
//             [
//                 "typeCode" => "allValueAddedServices",
//                 "isRequested" => true
//             ]
//         ],
//         "returnStandardProductsOnly" => false,
//         "nextBusinessDay" => true,
//         "productTypeCode" => "all",
//         "packages" => [
//             [
//                 "typeCode" => "3BX",
//                 "weight" => 1,
//                 "dimensions" => [
//                     "length" => 10,
//                     "width" => 20,
//                     "height" => 30
//                 ]
//             ]
//         ]
//     ],
//     'headers' => [
//         'Authorization' => 'Basic ' . base64_encode(env('DHL_USERNAME') . ':' . env('DHL_PASSWORD'))
//     ]
// ]);
