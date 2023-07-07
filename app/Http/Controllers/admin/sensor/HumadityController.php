<?php

namespace App\Http\Controllers\admin\sensor;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HumadityController extends Controller
{
    public function index()
    {
        return view('admin.sensor.humadity');
    }
}
