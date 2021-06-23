<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'body' => 'required',
            'status' => 'required|max:255',
        ];
    }
}
