<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'company_name',
        'contract_number',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
