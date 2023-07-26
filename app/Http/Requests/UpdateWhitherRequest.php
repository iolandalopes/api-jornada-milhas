<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWhitherRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string',
            'photo' => 'sometimes|mimes:jpg,bmp,png',
            'price' => 'sometimes|numeric',
        ];
    }
}
