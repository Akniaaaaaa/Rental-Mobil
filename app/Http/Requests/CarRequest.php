<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            "kd_tipe" => "required",
            "merek" => "required",
            "no_plat" => "required",
            "warna" => "required",
            "tahun" => "required",
            "status" => "required",
            "harga" => "required",
            "gambar" => "required|file|image:jpeg,png,jpg",
        ];
    }

    public function messages()
    {
        return [
            "kd_tipe.required" => "Wajib diisi",
            "merek.required" => "Wajib diisi",
            "no_plat.required" => "Wajib diisi",
            "warna.required" => "Wajib diisi",
            "tahun.required" => "Wajib diisi",
            "status.required" => "Wajib diisi",
            "harga.required" => "Wajib diisi",
            "gambar.required" => "Wajib diisi",
        ];
    }
}
