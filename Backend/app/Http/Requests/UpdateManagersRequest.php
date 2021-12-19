<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateManagersRequest extends FormRequest
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
            'gender' => 'required',
            'city' => 'required',
            'address' => 'required',
            'email' => 'required|min:10|max:50|bail',
            'birth' => 'required',
            'joining' => 'required',
            'salary' => 'required|numeric|bail',
            'phone' => 'required|min:11|max:15|bail'
        ];
    }
}
