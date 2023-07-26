<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWhitherRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'photo' => 'mimes:jpg,bmp,png',
            'price' => 'required|numeric',
        ];
    }
}
