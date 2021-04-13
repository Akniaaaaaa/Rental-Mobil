<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SewaMobilRequest extends FormRequest
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
        // dd($this->tgl_rental);
        return [
            'tgl_rental' => Rule::unique('tb_trx')->where(function ($query) {
                return $query->where('tgl_rental', $this->tgl_rental)->where('id_mobil', $this->id);
            })->ignore($this->id),

            // "tgl_rental" => "required|unique:tb_trx",
            "tgl_kembali" => "required",
            "pengambilan" => "required",

        ];
    }

    public function messages()
    {
        return [
            "tgl_rental.required" => "Wajib diisi!",
            "tgl_rental.unique" => "Maaf, pada tanggal ini mobil telah disewa oleh penyewa lainnya!",
            "tgl_kembali.required" => "Wajib diisi!",
            "pengambilan.required" => "Wajib diisi!",
        ];
    }
}
