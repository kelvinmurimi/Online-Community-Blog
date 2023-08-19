<?php

declare(strict_types=1);

namespace App\Http\Requests\categories;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'name'=>['required','unique:categories,name,except,id'],
        ];
    }
}
