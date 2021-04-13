<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "name" => "required",
            "email" => "required",
            "no_hp" => "required",
            "no_ktp" => "required",
            "alamat" => "required",
            "jk" => "required",
            // "role" => "required",
            // "gambar" => "required|file|image:jpeg,png,jpg",


        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Wajib diisi",
            "email.required" => "Wajib diisi",
            "no_hp.required" => "Wajib diisi",
            "no_ktp.required" => "Wajib diisi",
            "alamat.required" => "Wajib diisi",
            "jk.required" => "Wajib diisi",
            // "role.required" => "Wajib diisi",
            // "gambar.required" => "Wajib diisi"

        ];
    }
}
