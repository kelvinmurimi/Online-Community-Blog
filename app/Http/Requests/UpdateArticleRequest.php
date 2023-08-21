<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'title'=>['required','max:255'],
            'excerpt' =>['required'],
            'category_id'=>['required'],
          // 'cover_image'=>['required','mimes:jpg,png,jpeg,','max:5048'],
          // 'is_published'=>['required'],
           'content'=>['required']
        ];
    }
}
