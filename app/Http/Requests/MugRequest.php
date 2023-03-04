<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MugRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'image' => 'image|mimes:png,jpg,jpeg,svg,webp',
            'item_name' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required',
            'important_information' => 'max:10000'
        ];
    }
}
