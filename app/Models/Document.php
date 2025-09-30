<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'powerplant_id',
        'title',
        'file_path',
        'uploaded_by',
        'uploaded_at',
    ];

    public function powerplant()
    {
        return $this->belongsTo(Powerplant::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
