<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WantRequest extends FormRequest
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
          'name' => 'between: 3,30',
          'email' => ' email',
          // 'phone' => 'required | numeric',
          'phone' => 'between: 19,20',
          'note' => 'max: 1000'
        ];
    }
    public function messages()
{
    return [
        'required' => 'Поле :attribute должно быть заполнено',
        'name.between' => 'Поле :attribute должно быть от :min до :max символов',
        // 'numeric' => 'Поле :attribute должно содержать только цифры',
        'phone.between' => 'Поле :attribute должно быть заполнено',
        'email' => 'Поле :attribute должно содержать email адрес',
        'max' => 'Поле :attribute повинно мати не більше :max символів'
    ];
}
    public function attributes()
    {
        return [
            'name' => '"Ім`я"',
            'mail' => '"Email"',
            'phone' => '"Телефон"',
            'note' => '"Повідомлення"',
        ];
    }
}
