<?php

namespace App\Models\Admin;

use App\Models\admin\LocationSensor;
use App\Models\Model;

class IndicatorLimit extends Model
{
    protected $table = 'batas_ketinggian_air';

    public function location()
    {
        return $this->belongsTo(LocationSensor::class, 'id_location');
    }
}
