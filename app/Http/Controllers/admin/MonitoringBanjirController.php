<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LocationSensor;
use App\Models\admin\WaterLevel;
use GuzzleHttp\Client;

class MonitoringBanjirController extends Controller
{
    public function index()
    {
        return view('admin.monitoringBanjir.index', [
            'locations' => LocationSensor::all()
        ]);
    }

    public function fetchData()
    {
        $client = new Client();
        $response = $client->get('http://localhost:2000/api/banjir');
        $data = json_decode($response->getBody(), true);

        $waterLevel = new WaterLevel();
        $waterLevel->water_level = $data['ketingan_air'];
        $waterLevel->location = $data['location'];
        $waterLevel->time = $data['time'];
        $waterLevel->save();

        return $data;
    }

    public function show(LocationSensor $location)
    {

        return view('admin.monitoringBanjir.show', [
            'waterLevels' => WaterLevel::where('location', $location->location_name)->orderByDesc('created_at')->take(24)->get()
        ]);
    }
}
