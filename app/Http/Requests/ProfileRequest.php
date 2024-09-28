<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'firstName' => 'nullable|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'jobTitle' => 'nullable|string|max:255',
            'businessName' => 'nullable|string|max:255',
            'phoneNumberWA' => 'nullable|string|max:255',
            'SelectedLanguage' => 'nullable|string|max:255',
            

            'locationLink' => 'nullable|string|max:255',

            'reservationLink' => 'nullable|string|max:255',



            'location' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpeg,jpg,png',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png',
            'theme_id' => 'nullable|exists:themes,id',
            //            'bgColor' => 'nullable|string|max:255',
            //            'buttonColor' => 'nullable|string|max:255',
            'phoneNum' => 'nullable|string|max:255',
            'phoneNumSecondary' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'isPersonal'=>'nullable|string|max:255'

        ];
    }
}
