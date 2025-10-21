<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisionalSecretariat extends Model
{
    protected $fillable = [
        'ds_code',
        'ds_name',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'd_code', 'd_code');
    }
}
