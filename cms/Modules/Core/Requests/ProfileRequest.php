<?php

namespace Cms\Modules\Core\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => ['required'],
            'phone' => ['required'],
            'password' => ['nullable','confirmed', 'min:6', 'max:50'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'phone.required' => 'Số điện thoại không được để trống',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu quá ít ký tự!',
            'password.max' => 'Mật khẩu quá nhiều ký tự!',
            'password.confirmed' => 'Mật khẩu không khớp!'
        ];
    }
}
