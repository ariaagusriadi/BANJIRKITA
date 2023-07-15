<?php

namespace App\Models;

use App\Models\admin\LocationSensor;
use App\Models\Model;

class Notification extends Model
{
    protected $table = 'notifikasi';

    public function locations()
    {
        return $this->belongsTo(LocationSensor::class, 'location');
    }

}
