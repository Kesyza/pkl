<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_nota', 'id_penyewa', 'tanggal_sewa', 'jaminan', 'status_sewa'];
    public $timestamps = true;

    public function penyewas()
    {
        return $this->belongsTo('App\Models\Penyewa', 'id');
    }

    public function transaksis()
    {
        $this->hasMany('App\Models\Transaksi', 'id_sewa');
    }
}
