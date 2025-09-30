<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Powerplant extends Model
{
    protected $fillable = [
        'name',
        'type',
        'location',
        'capacity_mw',
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }

    public function maintenanceTasks()
    {
        return $this->hasMany(MaintenanceTask::class);
    }

    public function monitoringData()
    {
        return $this->hasMany(MonitoringData::class);
    }
}
