<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'title'=>['required','unique:articles,id'],
             'excerpt' =>['required'],
            'image'=>['required','mimes:png,jpg'],
            'is_published'=>['required'],
            'content'=>['required']
        ];
    }
}
