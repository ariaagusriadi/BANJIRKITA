<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LocationSensor;
use Illuminate\Http\Request;

class LocationSensorController extends Controller
{
    public function index()
    {
        return view('admin.locationSensor.index', [
            'locationSensors' => LocationSensor::all()
        ]);
    }
    public function create()
    {
        return view('admin.locationSensor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_name' => 'required',
            'sensor_name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $locationSensor = new LocationSensor();
        $locationSensor->location_name = $request->location_name;
        $locationSensor->sensor_name = $request->sensor_name;
        $locationSensor->description = $request->description;
        $locationSensor->location = $request->location;
        $locationSensor->save();

        return redirect('admin/locationSensor')->with('success', 'success create new location sensor');
    }

    public function show(LocationSensor  $locationSensor)
    {
        return view('admin.locationSensor.show', [
            'locationSensor' => $locationSensor,
            'location_1' => explode(',', $locationSensor->location)[0],
            'location_2' => explode(',', $locationSensor->location)[1]
        ]);
    }

    public function edit(LocationSensor  $locationSensor)
    {
        return view('admin.locationSensor.edit', [
            'locationSensor' => $locationSensor,
            'location_1' => explode(',', $locationSensor->location)[0],
            'location_2' => explode(',', $locationSensor->location)[1]
        ]);
    }

    public function update(Request $request, LocationSensor $locationSensor)
    {
        $request->validate([
            'location_name' => 'required',
            'sensor_name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);
        $locationSensor->location_name = $request->location_name;
        $locationSensor->sensor_name = $request->sensor_name;
        $locationSensor->description = $request->description;
        $locationSensor->location = $request->location;
        $locationSensor->save();

        return redirect('admin/locationSensor')->with('warning', 'success edit  location sensor');
    }

    public function destroy(LocationSensor $locationSensor)
    {
        $locationSensor->delete();

        return back()->with('danger', 'succes delete location sensor');
    }
}
