<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'unique:users,phone', 'min:11', 'max:15'],
            'password' => ['required', 'confirmed'],
        ];
    }
}
