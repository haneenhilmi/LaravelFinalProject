<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'Store_id' => 'required',
            'description' => 'nullable',
            'base_price' => 'required|numeric',
            'discount_price' => 'required|numeric',
            'flag'=>'required',
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'Store_id.required' => 'You must choose a store',
            'base_price.required' => 'The base price is required',
            'discount_price.required' => 'The discount price is required',
            'flag.required' => 'You must choose a flag for price',
            'logo.required' => 'You must select a logo for product',
        ];
    }
}
