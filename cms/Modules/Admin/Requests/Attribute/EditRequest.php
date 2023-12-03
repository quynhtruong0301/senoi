<?php

namespace Cms\Modules\Admin\Requests\Attribute;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'type' => ['required'],
            'value' => ['required'],
            'display_name' => ['required'],
            'status' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'value.required' => 'Bạn cần nhập giá trị!',
            'display_name.required' => 'Bạn cần nhập tên hiển thị!',
        ];
    }
}
