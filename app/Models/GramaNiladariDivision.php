<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GramaNiladariDivision extends Model
{
    protected $fillable = ['gnd_uid','gnd_code','gnd_number', 'gnd_name'];

    public function user()
    {
        return $this->hasMany(User::class, 'gnd_uid', 'gnd_uid');
    }

    public function divisionalSecretariat()
    {
        return $this->belongsTo(DivisionalSecretariat::class, 'ds_id', 'ds_id');
    }
}
