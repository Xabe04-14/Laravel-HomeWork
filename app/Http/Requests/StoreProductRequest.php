<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',  // ✅ Fix lỗi
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
        ];
    }
}    