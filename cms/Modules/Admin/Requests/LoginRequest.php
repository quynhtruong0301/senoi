<?php

namespace Cms\Modules\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6', 'max:50'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Tài khoản không được để trống!',
            'email.email' => 'Tài khoản không đúng định dạng !',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu quá ít ký tự!',
            'password.max' => 'Mật khẩu quá nhiều ký tự!'
        ];
    }
}
