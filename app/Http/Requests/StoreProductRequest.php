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
        //sửa lại KHI BẬT MIDDLEWAREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE FALSE
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
            'catalog_id' => 'required|exists:catalogs,id',
            'ten' => 'required|string|max:255',
            'gia' => 'required|numeric',
            'giamgia' => 'nullable|numeric',
            'quantity' => 'required|integer',
            'status' => 'required|boolean',
            'colors' => 'required|array',
            'colors.*' => 'required|string|max:200',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'motachitiet' => 'nullable|string',
        ];
    }
}
