<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShelterRequest extends FormRequest
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
            'name' => 'required | between: 3,30',
            'address' => 'required | between: 5,50',
            'mail' => 'required | email',
            // 'phone' => 'required | numeric',
            'phone' => 'between: 19,20',
            'logo' => 'image'
        ];
    }
    public function messages()
{
    return [
        'required' => 'Поле :attribute должно быть заполнено',
        'name.between' => 'Поле :attribute должно быть от :min до :max символов',
        'address.between' => 'Поле :attribute должно быть от :min до :max символов',
        // 'numeric' => 'Поле :attribute должно содержать только цифры',
        'phone.between' => 'Поле :attribute должно быть заполнено',
        'image' => 'Поле :attribute должно содержать изображение',
        'email' => 'Поле :attribute должно содержать email адрес'

    ];
}
    public function attributes()
    {
        return [
            'name' => '"Ім`я"',
            'address' => '"Адрес"',
            'mail' => '"Email"',
            'phone' => '"Телефон"',
            'logo' => '"Логотип"',
        ];
    }
}
