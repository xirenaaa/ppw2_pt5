<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    use HasFactory;
    protected $table = 'hadiahs';
    protected $primaryKey = 'id_hadiah';
    protected $fillable = ['id_hadiah', 'id_lomba', 'posisi', 'nominal', 'deskripsi'];
    public $incrementing = false;
    protected $keyType = 'int';

    public function lomba()
    {
        return $this->belongsTo(Lomba::class, 'id_lomba', 'id_lomba');
    }
}