<?php

namespace App\Http\Controllers\admin\sensor;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WaterLevelController extends Controller
{
    public function index()
    {
        return view('admin.sensor.waterLevel');
    }

    public function fetchData()
    {
        $client = new Client();

        $response = $client->get('http://localhost:2000/api');
        $data = json_decode($response->getBody(), true);
        return response()->json($data['data']);
    }
}
