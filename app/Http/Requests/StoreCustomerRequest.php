<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
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
            'name' => ['required'],
            'location_id' => ['required'],
            'company_name' => ['required'],
            'email' => ['required', 'email'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'location_id' => $this->locationId,
            'company_name' => $this->companyName
        ]);
    }
}
