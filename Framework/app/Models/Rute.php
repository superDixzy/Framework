<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    protected $fillable = [
        'kota_asal',
        'kota_tujuan'
    ];

    public function bus()
    {
        return $this->hasMany(Bus::class);
    }
}