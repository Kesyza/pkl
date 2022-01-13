<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;

    protected $fillable = ['nama_sopir', 'alamat', 'nomor_hp'];
    public $timestamps = true;

    public function sewas()
    {
        $this->hasMany('App\Models\Sewa', 'id_sopir');
    }
}
