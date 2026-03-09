<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'nama_bus',
        'plat_nomor',
        'kapasitas',
        'status',
        'supir_id',
        'rute_id'
    ];

    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }

    public function rute()
    {
        return $this->belongsTo(Rute::class);
    }
}