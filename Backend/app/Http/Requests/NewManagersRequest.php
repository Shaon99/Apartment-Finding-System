<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewManagersRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required|min:6',
            'gender' => 'required',
            'city' => 'required',
            'profileImage' => 'required',
            'address' => 'required',
            'email' => 'required|min:10|max:50|email:rfc,dns|unique:managers,email|bail',
            'birth' => 'required',
            'joining' => 'required',
            'salary' => 'required|numeric|bail',
            'phone' => 'required|min:11|max:15|unique:managers,phone|bail'
        ];
    }
    public function messages()
    {
        return [
            'profileImage.required' => 'Please insert an image',
        ];
    }
}
