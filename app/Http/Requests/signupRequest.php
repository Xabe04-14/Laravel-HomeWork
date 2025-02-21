<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'age' => 'required|numeric|min:1|max:120',
            'date' => 'required|date',
            'phone' => 'required|digits_between:9,15',
            'web' => 'required|url',
            'addr' => 'required|string|max:255',


        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'Fill correct name please!',
            'age.numeric' => 'Fill correct age please!',
            'date.date' => 'Re-fill the date please!',
            'phone.digits_between' => 'Re-check your phone number (must be 9-15 digits)!',
            'web.url' => 'Re-check your website URL!',
            'addr.string' => 'Re-check your address!',
        ];
    }
}
