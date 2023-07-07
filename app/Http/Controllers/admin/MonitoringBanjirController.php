<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LocationSensor;
use App\Models\admin\WaterLevel;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class MonitoringBanjirController extends Controller
{
    public function index()
    {
        return view('admin.monitoringBanjir.index', [
            'locations' => LocationSensor::all()
        ]);
    }

    public function show(LocationSensor $location)
    {

        return view('admin.monitoringBanjir.show', [
            'waterLevels' => WaterLevel::where('location', $location->location_name)->orderByDesc('created_at')->take(24)->get()
        ]);
    }
}
