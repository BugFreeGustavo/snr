<?php

namespace App\Professional\Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'current_password' => ['required_with:password', 'current_password'],
            'password' => ['nullable', 'confirmed'],
        ];
    }
}
