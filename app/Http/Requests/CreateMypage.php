<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMypage extends FormRequest
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
            'name' => 'required|max:30', 
            'email' => 'required|max:60',
            'password' => 'required|max:255',

        ];
    }

    public function attributes()
{
    return [
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
    ];
}
}
