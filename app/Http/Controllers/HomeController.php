<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;


use Facade\IgnitionContracts\Solution;
use Illuminate\Http\Request;
//use Ixudra\Curl\Facades\Curl;
use OTIFSolutions\CurlHandler\Curl;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Exception;


class HomeController extends Controller

{
    public function getData()
    {

        //using ixusdra 
        // $response = Curl::to('https://api.synopticdata.com/v2/stations/latest?radius=KHOU,50&limit=10&vars=air_temp&within=100&token=52d366517d1548fab7c951813c20f96a')->execute();
        // return response()->json($response);
        // dd($response);

        //using otif-Solution
        $response = Curl::Make()->GET->url('https://api.synopticdata.com/v2/stations/latest?radius=KHOU,50&limit=10&vars=air_temp&within=100&token=52d366517d1548fab7c951813c20f96a')->execute();

        return response()->json($response);
        //dd($response);
        //}

        //using guzzle
        // $response=Http::dd()->get('https://api.synopticdata.com/v2/stations/latest?radius=KHOU,50&limit=10&vars=air_temp&within=100&token=52d366517d1548fab7c951813c20f96a');
        //return response()->json($response);
        // dd($response);
        // }
    }

    public function getWeather()
    {
        $response = Curl::Make()->GET->url('http://api.synopticdata.com/v2/stations/latest?radius=KHOU,50&limit=10&vars=air_temp&within=100&token=52d366517d1548fab7c951813c20f96a')->execute();
        
             return response()->json([
                'UNITS' => $response['UNITS'],
                'LONGITUDE' => $response['STATION'][0]['LONGITUDE'],
                'LATITUDE' => $response['STATION'][0]['LATITUDE'],
            ]);
            
        //dd($response['STATION'][0]['LONGITUDE'], $response['STATION'][0]['LATITUDE'], $response['UNITS']);
    }

    public function index()
    {
        $apiURL = 'https://api.synopticdata.com/v2/stations/latest?radius=KHOU,50&limit=10&vars=air_temp&within=100&token=52d366517d1548fab7c951813c20f96a';
        $response = Http::get($apiURL);
        $response->status();
        $responseBody = json_decode($response->getBody(), true);
        return response()->json($responseBody);
        //dd($responseBody);
    }
}
