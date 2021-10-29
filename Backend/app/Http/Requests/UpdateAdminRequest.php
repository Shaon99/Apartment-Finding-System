<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'user_name' => 'required|max:30|min:5|unique:admin,Username|bail',
            'first_name' => 'required|alpha|bail',
            'last_name' => 'required|alpha|bail',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required|min:10|max:50|email:rfc,dns|unique:admin,Email|bail',
            'birth' => 'required',
            'joining' => 'required',
            'salary' => 'required|numeric|bail',
            'phone' => 'required|min:11|max:15|bail'
        ];
    }
}
