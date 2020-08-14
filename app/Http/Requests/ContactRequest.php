<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Если ставим false, то неавторизированный пользователь не сможет отправлять форму
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя является обязательным',
            'email.required' => 'Поле Емаил является обязательным',
            'message.required' => 'Поле Сообщение является обязательным',
        ];
    }
}
