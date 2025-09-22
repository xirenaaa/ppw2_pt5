<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_lomba';
    protected $guarded = [];

    public function bidang()
    {
        return $this->belongsTo(BidangLomba::class, 'id_bidang', 'id_bidang');
    }

    public function hadiah()
    {
        return $this->hasMany(Hadiah::class, 'id_lomba', 'id_lomba');
    }
}