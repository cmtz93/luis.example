<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Vehicle extends FormRequest
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
            "plate" => "required|unique:vehicles,plate|string|max:10",
            "color" => "nullable|string|max:20",
            "serial" => "required|unique:vehicles,serial|string|max:255",
            "year" => "nullable|integer|max:2020|min:1990"
        ];
    }
}
