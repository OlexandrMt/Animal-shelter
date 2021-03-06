<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
            'name' => 'required | between: 1,30',
            'breed' => 'required | between: 1,30',
            'sex' => 'required',
            'type' => 'required',
            'age' => 'required | numeric',
            'photo' => 'image'
        ];
    }
    public function messages()
{
    return [
        'required' => 'Поле :attribute должно быть заполнено',
        'name.between' => 'Поле :attribute должно быть от :min до :max символов',
        'breed.between' => 'Поле :attribute должно быть от :min до :max символов',
        'numeric' => 'Поле :attribute должно содержать только цифры',
        'image' => 'Поле :attribute должно содержать изображение',

    ];
}
    public function attributes()
    {
        return [
            'name' => '"Имя"',
            'breed' => '"Порода"',
            'sex' => '"Стать"',
            'age' => '"Возраст"',
            'photo' => '"Фото"',
        ];
    }
}
