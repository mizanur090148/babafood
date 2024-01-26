<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
        $input = [
            'business_name' => 'required|max:255|unique:businesses,business_name,' . request('id'),
            'start_date' => 'nullable|date',
            'contact_number' => 'required',
            //'alternate_contact_number' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'landmark' => 'required',
            'timezone' => 'required',
            'prefix' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|max:40',
            'email' => 'required|max:50|unique:third_parties,email,' . request('id'),
           // 'confirmed' => 'required',
        ];
        if (!request('id')) {
            $input['password'] = ['required', 'confirmed', Password::min(6)];
        }
        return $input;
    }
}
