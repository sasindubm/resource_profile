<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'd_code',
        'd_name'
    ];

    public function divisionalSecretariats()
    {
        return $this->hasMany(DivisionalSecretariat::class, 'ds_code', 'ds_code');
    }
}
