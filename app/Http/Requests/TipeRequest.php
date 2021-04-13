<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipeRequest extends FormRequest
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
            "nm_tipe" => "required",

        ];
    }

    public function messages()
    {
        return [
            "kd_tipe.required" => "Wajib diisi",
            "nm_tipe.required" => "Wajib diisi",

        ];
    }
}
