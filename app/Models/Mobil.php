<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = ['nama_mobil', 'merek_mobil', 'nomor_polisi', 'tahun_pembuatan', 'harga_mobil', 'kapasitas_penumpang', 'fasilitas_mobil', 'status_mobil', 'gambar'];
    public $timestamps = true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return asset('images/mobil/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return unlink(public_path('images/mobil/' . $this->gambar));
        }

    }

    public function sewas()
    {
        $this->hasMany('App\Models\Sewa', 'id_mobil');
    }
}
