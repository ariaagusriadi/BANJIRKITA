<?php

namespace App\Models\admin;

use App\Models\Admin\IndicatorLimit;
use App\Models\Model;

class LocationSensor extends Model
{
    protected $table = 'location_sensor';

    public function indicatorLimit()
    {
        return $this->hasOne(IndicatorLimit::class, 'id_location');
    }
}
