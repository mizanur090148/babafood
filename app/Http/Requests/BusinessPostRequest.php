<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessPostRequest extends FormRequest
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
            'business_name' => 'required|unique:businesses|max:255',
            'start_date' => 'nullable|date',
            'contact_number' => 'required',
            'alternate_contact_number' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'landmark' => 'required',
            'timezone' => 'required',
            'prefix' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|unique:third_parties|max:50',
            'password' => 'required|min:5',
            'confirm_password' => 'required|min:5',
        ];
    }
}
