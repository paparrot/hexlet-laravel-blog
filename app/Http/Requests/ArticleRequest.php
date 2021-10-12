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
            'name' => 'required|unique:articles, name' .$this->get('id'),
            'body' => 'required|min:200',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Название - обязательное поле',
            'name.unique' => 'Название должно быть уникальным',
            'body.required' => 'Содержание - обязательное поле!',
            'body.min' => 'Минимальное количество символов в содержании - 200'
        ];
    }
}
