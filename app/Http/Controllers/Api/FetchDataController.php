<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\admin\WaterLevel;
use App\Http\Controllers\Controller;
use App\Models\Admin\IndicatorLimit;

class FetchDataController extends Controller
{
    public function fetchData()
    {
        $client = new Client();

        $response = $client->get('http://localhost:2000/api');
        // $response = $client->get(env('API_ENDPOINT'));
        $data = json_decode($response->getBody(), true);
        return response()->json($data['data']);
        // return response()->json($data);
    }

    public function getData($id)
    {
        $data = IndicatorLimit::where('id_location', $id)->first();
        return $data;
    }

    public function fetchDataBase()
    {

        $data = WaterLevel::latest()->first();
        $water = json_decode($data);
        return $water;
    }
}
