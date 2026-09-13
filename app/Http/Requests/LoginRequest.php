<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'bail|required|string|email',
            'password' => 'bail|required|string'
        ];
    }

    public function messages()
    {
        return[
            'email.required' => 'mandatory field',
            'password.required' => 'mandatory field'
        ];
    }
}
