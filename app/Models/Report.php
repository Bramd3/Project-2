<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'created_by',
        'title',
        'content',
        'generated_at',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
