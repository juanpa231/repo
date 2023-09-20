<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'companyName' => 'required|max:30',
            'contactName'=>'max:30',
            'contactTitle'=>'max:30',
            'address'=>'max:60',
            'city'=>'max:15',
            'region'=>'max:15',
            'postalCode'=>'max:10',
            'country'=>'max:15',
            'phone'=>'max:24',
            'mobile'=>'max:24',
            'email'=>'max:255',
            'fax'=>'max:24',
        ];
    }
}
