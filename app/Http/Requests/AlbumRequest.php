<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
        $rules = [
            'name' =>'required|min:3|max:24',
            'category_id' =>'min:1|max:24'


        ];
        if($this->route()->named('album.store')) {
            $rules['name'] .= '|unique:albums,name';
        }
        if(!$this->route()->named('album.update')){
            $rules['image'] = 'required';
        }
//        if($this->route()->named('album.create'))
//        {
//            $rules['category_id'] = 'required|min:1|max:24';
//        }
//        else{
//            $rules['category_name'] = 'required|min:1|max:24';
//        }
        return $rules;
    }
    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для ввода',
            'min' => 'Поле :attribute должно иметь минимум :min символов',
            'max' => 'Поле :attribute должно иметь максимум :max символов',
            'name.min' => 'Поле имя должно содержать минимум 5 символов ',
            'image.required' => 'Без загруженной картинки сохранять нелья'
        ];
    }
}
