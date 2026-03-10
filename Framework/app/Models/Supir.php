<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $fillable = [
        'nama_supir',
        'no_hp'
    ];

    public function bus()
    {
        return $this->hasMany(Bus::class);
    }
}