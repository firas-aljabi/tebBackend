<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class step2ProfileRequest extends FormRequest
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
        return [
            'primaryLinks.*.id' => 'sometimes|exists:primary_links,id',
            'primaryLinks.*.value' => 'sometimes|string|max:255',
            'secondLinks.*.name_link' => 'nullable|string|max:255',
            'secondLinks.*.link' => 'sometimes|string|max:255',
            'secondLinks.*.logo' => 'nullable',
            'sections.*.title' => 'sometimes|string|max:255',
            'sections.*.name_of_file' => 'sometimes|string',
            'sections.*.media' => 'sometimes',
        ];
    }
}
