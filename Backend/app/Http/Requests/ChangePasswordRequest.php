<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'Npassword' => 'required|min:8|bail',
            'Opassword' => 'required|min:8|bail',
            'CNpassword' => 'required|min:8|bail'
        ];
    }

    public function messages(){
        return [

            'Npassword.required' =>"Please enter your new Password",
            'CNpassword.required' =>"Please confirm your new Password",
            'Opassword.required' =>"Please enter your old Password",
            'Npassword.min' => "Password must be at least 8 characters.",

        ];
    }
}
