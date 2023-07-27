<?php

namespace App\Models\admin;

use App\Models\admin\IndicatorLimit;
use App\Models\Model;
use App\Models\Notification;

class LocationSensor extends Model
{
    protected $table = 'lokasi_sensor';

    public function indicatorLimit()
    {
        return $this->hasOne(IndicatorLimit::class, 'id_location');
    }

    public function notification()
    {
        return $this->hasMany(Notification::class, 'location');
    }
}
