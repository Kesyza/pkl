<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id_sewa', 'id_mobil', 'id_sopir', 'tanggal_kembali', 'jumlah_bayar', 'denda'];
    public $timestamps = true;

    public function sewas()
    {
        return $this->belongsTo('App\Models\Sewa', 'id');
    }

    public function mobils()
    {
        return $this->belongsTo('App\Models\Mobil', 'id');
    }

    public function sopirs()
    {
        return $this->belongsTo('App\Models\Sopir', 'id');
    }
}
