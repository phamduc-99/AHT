<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEditCategory extends FormRequest
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
            'name' => 'required | unique:categories,name,'.$this->category,
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên danh mục không được để trống',
            'name.unique' => 'Danh mục đã tồn tại'
        ];
    }
}
