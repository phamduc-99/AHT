<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAddUser extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:12',
            'fullname' => 'required|max:100',
            'phone' => 'required',
            'address' => 'required|max:100'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Không đúng định dạng email',
            'email.unique' => 'Email đã được đăng kí',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Tối thiểu 6 ký tự',
            'password.max' => 'Tối đa 12 ký tự',
            'fullname.required' => 'Tên không được để trống',
            'fullname.max' => 'Tối đa 12 ký tự',
            'address.required' => 'Địa chỉ không được để trống',
            'address.max' => 'Tối đa 100 ký tự',
            'phone.required' => 'Số điện thoại không được để trống'
        ];
    }
}
