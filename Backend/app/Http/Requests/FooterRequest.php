<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'about' => 'required',
            'address' => 'required',
            'phone' => 'required|min:11|max:15|bail',
            'email' => 'required|min:10|max:50|email:rfc,dns|bail',
            'facebook' => 'required|url|bail',
            'twitter' => 'required|url|bail',
            'linkedin' => 'required|url|bail',
            'youtube' => 'required|url|bail',
            'instagram' => 'required|url|bail'
        ];
    }
    public function messages()
    {
        return [
            'facebook.url' => 'Please insert a valid Facebook URL',
            'twitter.url' => 'Please insert a valid Twitter URL',
            'linkedin.url' => 'Please insert a valid Linkedin URL',
            'youtube.url' => 'Please insert a valid YouTube URL'
        ];
    }
}
