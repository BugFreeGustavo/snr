<?php

namespace App\ProfessionalOperations\Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanProjectRequest extends FormRequest
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
        ];
    }
}
