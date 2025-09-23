<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BidangLomba extends Model
{
    protected $table = 'bidang_lombas';
    protected $primaryKey = 'id_bidang';
    protected $fillable = ['id_bidang', 'nama_bidang'];
    public $incrementing = false;

    public function lombas()
    {
        return $this->hasMany(Lomba::class, 'id_bidang');
    }
}