<?php

namespace App\Http\Requests\seller;

use Illuminate\Foundation\Http\FormRequest;

class Signup extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "username" => "required",
            'email' => "required|email|email:unique(user)",
            'password' => "required|min:8|max:30",
            'mobile' => "required|max:10|min:10"
        ];
    }
}
