<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceTask extends Model
{
    protected $fillable = [
        'powerplant_id',
        'assigned_to',
        'title',
        'description',
        'scheduled_date',
        'status',
    ];

    public function powerplant()
    {
        return $this->belongsTo(Powerplant::class);
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
