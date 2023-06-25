<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\WaterLevel;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $client = new Client();

        $response = $client->get('https://ibnux.github.io/BMKG-importer/cuaca/501311.json');
        $data['all_weather'] = json_decode($response->getBody(), true);
        $data['time'] = time();
        $data['list_waterLevel'] = WaterLevel::orderByDesc('created_at')->take(24)->get();
        return view('user.home', $data);
    }
}
