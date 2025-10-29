<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GramaNiladariDivision;

class AbondenedProject extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ap_id',
        'ap_name',
        'ap_reason',
    ];

    public function gnd() {
        return $this->belongsTo(GramaNiladariDivision::class, 'gnd_uid', 'gnd_uid');
    }
}
