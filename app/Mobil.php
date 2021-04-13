<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'tb_mobil';
    protected $fillable = ['id_mobil', 'merek', 'kd_tipe', 'tahun', 'warna', 'no_plat', 'status', 'harga', 'gambar'];
    protected $primarykey = 'id_mobil';
    public function tipe()
    {
        return $this->belongsTo('App\Tipe');
    }
}
