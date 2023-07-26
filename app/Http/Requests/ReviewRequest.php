<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'userName' => 'required|string',
            'photo' => 'mimes:jpg,bmp,png',
            'review' => 'required|string',
        ];
    }
}
