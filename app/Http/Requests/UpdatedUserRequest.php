<?php

namespace App\Http\Requests;


class UpdatedUserRequest extends CreatedUserRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = parent::rules();

        $rules['passwordd'] = [
            'nulable',
            'string',
            'min:8',
        ];

        return $rules;
    }
}
