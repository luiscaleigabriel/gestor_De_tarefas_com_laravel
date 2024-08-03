<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => [
                'required',
                'min:8'
            ],
            'email' => [
                'required',
                "unique:users"
            ],
            'password' => [
                'required',
                'min:8'
            ],
        ];

        if ($this->method() === 'PUT') {
            $rules['email'] = [
                'required',
                "unique:users,email,{$this->id},id"
            ];
        }

        return $rules;
    }
}