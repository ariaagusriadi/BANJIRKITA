<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class AdminNotification extends Notification
{
    use Queueable;

    public function via(object $notifiable): array
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        $url = url('http://banjirkita.codewrite.my.id/login');

        return TelegramMessage::create()
            ->to('1265365501')
            ->content("Location {$notifiable->location}, Terindikasi banjir dengan ketinggian air {$notifiable->water_level} Cm, dengan waktu {$notifiable->time} ")
            ->line(" admin di harapkan memastikan ketinnggian air dan membuat notifikasi untuk masyarakat")
            ->button('Login Banjir kita', $url);
    }
}
