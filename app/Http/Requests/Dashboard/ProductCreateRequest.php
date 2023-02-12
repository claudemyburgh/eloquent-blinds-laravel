<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCreateRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products', 'title')->ignore(request()->product?->id)
            ],
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'body' => 'nullable|string',
            'live' => 'required',
            'popular' => 'nullable',
            'price' => 'nullable|numeric',
            'product_range' => 'nullable|string|max:120',
            'category_id' => 'exists:categories,id'
        ];
    }
}
