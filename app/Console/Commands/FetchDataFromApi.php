<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use App\Models\admin\WaterLevel;

class FetchDataFromApi extends Command
{
    protected $signature = 'app:fetch-data-from-api';

    protected $description = 'Fetch data from an API';

    public function handle()
    {
        try {
            $client  = new Client();
            $response = $client->get('http://localhost:2000/api/banjir'); // endpoint API
            $data = json_decode($response->getBody(), true);

            //  store data form API to DataBase
            $waterLevel = new WaterLevel();
            $waterLevel->water_level = $data['ketingan_air'];
            $waterLevel->location = $data['location'];
            $waterLevel->time = $data['time'];
            $waterLevel->save();

            return $data;
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
