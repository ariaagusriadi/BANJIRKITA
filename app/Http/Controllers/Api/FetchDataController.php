<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\admin\WaterLevel;
use App\Http\Controllers\Controller;
use App\Models\admin\IndicatorLimit;
use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Notification;

class FetchDataController extends Controller
{
    public function fetchData()
    {
        $client = new Client();

        $response = $client->get('http://simba.codewrite.my.id/api/sensors/latest');
        // $response = $client->get(env('API_ENDPOINT'));
        $data = json_decode($response->getBody(), true);
        // return response()->json($data['data']);
        return response()->json($data);
    }

    public function pushTele()
    {
        $client = new Client();
        $response = $client->get('http://simba.codewrite.my.id/api/sensors/latest');
        $data = json_decode($response->getBody(), true);
        // $data['ketinggian_air'] = 100;


        if ($data['ketinggian_air'] < 50) {

            $td = (object) [
                'location' => $data['sensor'],
                'water_level' => $data['ketinggian_air']
            ];

            Notification::send([$td], new AdminNotification());

            return ' Berhasil';
        } else {
            return ' Gagal';
        }
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
