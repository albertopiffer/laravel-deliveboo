<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatedishRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'description' => 'nullable|string',
            'typology' => 'required|string',
            'visible' => 'nullable|boolean',
            'price' => ['required', 'regex:/^\d{1,4}(\.\d{1,2})?$/'],   //decimal non è supportato da laravel
            'thumbnail' => 'nullable|image|max:2000',
        ];
    }
}
