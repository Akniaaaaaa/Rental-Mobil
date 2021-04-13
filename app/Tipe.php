<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table = 'tb_tipe';
    protected $fillable = ['id_tipe', 'kd_tipe', 'nm_tipe'];
    protected $primarykey = 'id_tipe';
    public function mobil()
    {
        return $this->hasOne("App\Mobil");
    }
}
