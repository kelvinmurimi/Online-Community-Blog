<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'content' => ['required'],
        ];
    }
}