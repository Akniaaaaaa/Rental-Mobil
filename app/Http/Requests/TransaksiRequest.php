<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransaksiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tgl_rental' => Rule::unique('tb_trx')->where(function ($query) {
                return $query->where('tgl_rental', $this->tgl_rental)->where('id_mobil', $this->id);
            })->ignore($this->id),
            "id_plg" => "required",
            "id_mobil" => "required",
            "tgl_rental" => "required",
            "tgl_kembali" => "required",
            "tgl_pengembalian" => "required",
            "status_sewa" => "required",
            "status_kembali" => "required",
            "pengambilan" => "required",

        ];
    }

    public function messages()
    {
        return [
            "id_plg.required" => "Wajib diisi!",
            "id_mobil.required" => "Wajib diisi!",
            "tgl_rental.required" => "Wajib diisi!",
            "tgl_rental.unique" => "Maaf, pada tanggal ini mobil telah disewa oleh penyewa lainnya!",
            "tgl_kembali.required" => "Wajib diisi!",
            "tgl_pengembalian.required" => "Wajib diisi!",
            "status_sewa.required" => "Wajib diisi!",
            "status_kembali.required" => "Wajib diisi!",
            "pengambilan.required" => "Wajib diisi!",
        ];
    }
}
