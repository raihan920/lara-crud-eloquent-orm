<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //edited from false to true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => 'required',
            'category_id' => 'required',
            'unit_type_short_code' => 'required',
            'quantity_per_unit' => 'required',
            'unit_price' => 'required',
            'unit_in_stock' => 'required',
            'unit_on_order' => 'required'
        ];
    }
}
