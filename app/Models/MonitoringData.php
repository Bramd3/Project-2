<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonitoringData extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'powerplant_id',
        'timestamp',
        'energy_output_mw',
        'temperature',
        'efficiency',
    ];

    public function powerplant()
    {
        return $this->belongsTo(Powerplant::class);
    }
}
