<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RHasGND extends Model
{
    protected $fillable = [
        'r_id',
        'gnd_uid',
        'r_is_used'
    ];
}
