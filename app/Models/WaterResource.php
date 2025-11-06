<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaterResource extends Model
{
    protected $fillable = [
        'water_source_name',
        'water_type',
    ];

    public $timestamps = false;
}
