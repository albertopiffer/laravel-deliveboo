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
            'name'=> [Rule::unique('dishes','name')], //bisogna inserire la required, ma dava errore
            'description'=> 'string',
            'tipology' => 'string',
            'visible'=> 'boolean',
            'price'=> 'numeric', //bisogna cambiarlo con decimal, ma dava errore
            'thumbnail'=> 'url',
        ];
    }
}
