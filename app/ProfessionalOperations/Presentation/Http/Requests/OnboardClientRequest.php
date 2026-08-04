<?php

namespace App\ProfessionalOperations\Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnboardClientRequest extends FormRequest
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
            'email' => ['nullable', 'email'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
