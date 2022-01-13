<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $fillable = ['nama_lengkap', 'email', 'password', 'jk', 'nomor_hp', 'alamat_lengkap'];
    public $timestamps = true;

    public function sewas()
    {
        $this->hasMany('App\Models\Sewa', 'id_penyewa');
    }
}
