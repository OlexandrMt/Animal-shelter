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
            'age' => 'required | numeric' ,
            'photo' => 'image'
        ];
    }
    public function messages()
{
    return [
        'required' => 'Поле :attribute не повинно бути пустим',
        'name.between' => 'Поле :attribute повинно бути :min до :max символів',
        'breed.between' => 'Поле :attribute повинно бути :min до :max символів',
        'numeric' => 'Поле :attribute може містити тільки цифри',
        'image' => 'Поле :attribute має містити зображення',

    ];
}
    public function attributes()
    {
        return [
            'name' => '"Кличка"',
            'breed' => '"Порода"',
            'sex' => '"Стать"',
            'age' => '"Вік"',
            'photo' => '"Фото"',
        ];
    }
}
