<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'tb_trx';
    protected $fillable = ['id', 'id_plg', 'id_mobil', 'tgl_rental', 'tgl_kembali', 'tgl_pengembalian', 'status_sewa', 'status_kembali', 'pengambilan'];
    protected $rules = [
        'tgl_rental' => 'sometimes|required|date|unique:tb_trx',
    ];
    public $total = [];
    // protected $primarykey = 'id';

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_plg');
    }

    public function pembayaran($transaksi)
    {
        $date1     = date_create($transaksi->tgl_rental);
        $date2   = date_create($transaksi->tgl_pengembalian);
        $cek_telat = date_diff($date1, $date2);
        $telat   = $cek_telat->format("%a");
        if ($telat > 0) {
            $total = $telat * ($transaksi->mobil->harga);
        } else {
            // if ($transaksi->tgl_pengembalian == 0) {
            //     echo ("belum kembali");
            // } else {
            $total = 1 * ($transaksi->mobil->harga);
        }
        return $total;
    }

    public function total_harga($transaksi)
    {
        $date1     = date_create($transaksi->tgl_rental);
        $date2   = date_create($transaksi->tgl_pengembalian);
        $cek_telat = date_diff($date1, $date2);
        $telat   = $cek_telat->format("%a");
        if ($telat > 0) {
            $total = $telat * ($transaksi->mobil->harga);
        } else {
            $total = 1 * ($transaksi->mobil->harga);
        }
        $harga_total = 0;
        $harga_total += $total;

        $total_harga[] = $harga_total;

        return $total_harga;
    }
}
