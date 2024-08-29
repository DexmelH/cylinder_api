<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCylinderCoverRequest extends FormRequest
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
            'name' => ['required', 'unique:cylinder_covers'],
            'hours' => ['required'],
            'lmd_status' => ['required', Rule::in([0, 1])],
            'location_id' => ['required'],
            'status' => ['required', Rule::in(["Disassembly", "Operation", "Storage", "Groove", "Assembly"])],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'location_id' => $this->locationId,
            'lmd_status' => $this->lmdStatus
        ]);
    }
}
