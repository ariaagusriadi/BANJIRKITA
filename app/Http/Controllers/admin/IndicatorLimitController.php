<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\IndicatorLimit;
use App\Models\admin\LocationSensor;
use Illuminate\Http\Request;

class IndicatorLimitController extends Controller
{
    public function index()
    {
        return view('admin.indicatorLimit.index', [
            'locations' => LocationSensor::all()
        ]);
    }

    public function create(LocationSensor $location)
    {
        return view('admin.indicatorLimit.create', [
            'location' => $location,
            'location_1' => explode(',', $location->location)[0],
            'location_2' => explode(',', $location->location)[1]
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_location' => 'required',
            'bahaya_1' => 'required',
            'bahaya_2' => 'required',
            'siaga_1' => 'required',
            'siaga_2' => 'required',
            'waspada_1' => 'required',
            'waspada_2' => 'required',
            'normal_1' => 'required',
            'normal_2' => 'required',
        ]);

        $indicatorLimit = new IndicatorLimit();
        $indicatorLimit->id_location = $request->id_location;
        $indicatorLimit->bahaya_1 = $request->bahaya_1;
        $indicatorLimit->bahaya_2 = $request->bahaya_2;
        $indicatorLimit->siaga_1 = $request->siaga_1;
        $indicatorLimit->siaga_2 = $request->siaga_2;
        $indicatorLimit->waspada_1 = $request->waspada_1;
        $indicatorLimit->waspada_2 = $request->waspada_2;
        $indicatorLimit->normal_1 = $request->normal_1;
        $indicatorLimit->normal_2 = $request->normal_2;
        $indicatorLimit->save();

        return redirect('admin/indicator-limit')->with('success', 'success add indicator limit');
    }

    public function show(LocationSensor $location)
    {
        return view('admin.indicatorLimit.show', [
            'location' => $location,
            'location_1' => explode(',', $location->location)[0],
            'location_2' => explode(',', $location->location)[1]
        ]);
    }

    public function edit(LocationSensor $location)
    {
        return view('admin.indicatorLimit.edit', [
            'location' => $location,
            'location_1' => explode(',', $location->location)[0],
            'location_2' => explode(',', $location->location)[1]
        ]);
    }

    public function update(Request $request, IndicatorLimit $indicatorLimit)
    {
        $indicatorLimit->bahaya_1 = $request->bahaya_1;
        $indicatorLimit->bahaya_2 = $request->bahaya_2;
        $indicatorLimit->siaga_1 = $request->siaga_1;
        $indicatorLimit->siaga_2 = $request->siaga_2;
        $indicatorLimit->waspada_1 = $request->waspada_1;
        $indicatorLimit->waspada_2 = $request->waspada_2;
        $indicatorLimit->normal_1 = $request->normal_1;
        $indicatorLimit->normal_2 = $request->normal_2;
        $indicatorLimit->save();

        return redirect('admin/indicator-limit')->with('warning', 'success edit indicator limit');
    }
}
