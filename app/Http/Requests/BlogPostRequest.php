<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => "bail|required|unique:post,title,{$this->input('id')}",
            'author' => 'required',
            'content' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'mandatory field',
            'author.required' => 'mandatory field',
            'content.required' => 'mandatory field'
        ];
    }
}
