<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'logo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'address.required' => 'The address is required',
            'logo.required' => 'You must select a logo for store',
        ];
    }
}
