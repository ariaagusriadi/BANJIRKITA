<?php

namespace App\Console\Commands;

use App\Notifications\AdminNotification;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class TelegramNotification extends Command
{

    protected $signature = 'app:telegram-notification';

    protected $description = 'Telegram notification';

    public function handle()
    {
        $client = new Client();
        $response = $client->get('http://simba.codewrite.my.id/api/sensors/latest');
        $data = json_decode($response->getBody(), true);
        $data['ketinggian_air'] = 45;

        if ($data['ketinggian_air'] < 50) {

            $td = (object) [
                'location' => $data['sensor'],
                'water_level' => $data['ketinggian_air'],
                'time' => $data['time']
            ];

            Notification::send([$td], new AdminNotification());

            return;
        }

        return;
    }
}
