<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserAdminAddRequest extends Request
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
            'name' => 'required',
            'email'=> 'required|email|unique:nv-users,email',
            'password'=> 'required|min:6',
            'confirmpassword'=> 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập họ và tên',
            'email.required'=>'Hãy nhập địa chỉ thư điện tử',
            'email.email'=> 'Hãy nhập địa chỉ thư điện tử',
            'email.unique'=> 'Địa chỉ thư điện tử đã tồn tại',
            'password.required'=> 'Mật khẩu có độ dài ít nhất 6 ký tự',
            'password.min'=> 'Mật khẩu có độ dài ít nhất 6 ký tự',
            'confirmpassword.same'=> 'Hai mật khẩu không giống nhau'
        ];
    }
}
