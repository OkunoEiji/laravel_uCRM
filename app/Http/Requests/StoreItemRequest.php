<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:50'],
            'memo' => ['required', 'max:255'],
            'price' => ['required', 'numeric'],
        ];
    }
}
