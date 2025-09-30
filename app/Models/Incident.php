<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = [
        'powerplant_id',
        'reported_by',
        'assigned_to',
        'type',
        'priority',
        'status',
        'description',
    ];

    public function powerplant()
    {
        return $this->belongsTo(Powerplant::class);
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reported_by');
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
