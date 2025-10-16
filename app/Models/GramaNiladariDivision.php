<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GramaNiladariDivision extends Model
{
    protected $primaryKey = 'gnd_code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['gnd_code', 'gnd_name'];

    public function user()
    {
        return $this->hasOne(User::class, 'gnd_code', 'gnd_code');
    }
}
