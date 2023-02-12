<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VariantsRequest extends FormRequest
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
            'sku' => 'required|max:25',
            'image' => 'nullable|mimes:jpg,bmp,png,jpeg|max:4000',
            'colour' => 'required|string|max:80',
            'material' => 'nullable|string|max:120',
            'pattern' => 'nullable|string|max:120',
            'thickness' => 'nullable|numeric',
            'pattern_width' => 'nullable|numeric',
            'pattern_height' => 'nullable|numeric',
            'popular' => 'nullable',
        ];
    }
}
