<?php

namespace Cms\Modules\Admin\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:30'],
            'slug' => ['required', 'string', 'max:30'],
            'real_image' => ['required', 'image', 'mimes:jpg,png,jpeg,svg'],
            'virtual_image' => ['required', 'image', 'mimes:jpg,png,jpeg,svg'],
            'description' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn cần nhập tên danh mục!',
            'name.max' => 'Tên danh mục không được vượt quá 30 ký tự!',
            'slug.required' => 'Bạn cần nhập slug!',
            'slug.man' => 'Slug không được vượt quá 30 ký tự!',
            'real_image.required' => 'Bạn cần thiết lập ảnh thật!',
            'virtual_image.required' => 'Bạn cần thiết lập ảnh ảo!',
            'real_image.image' => 'Dữ liệu tải lên phải ở dạng ảnh!',
            'virtual_image.image' => 'Dữ liệu tải lên phải ở dạng ảnh!',
            'description.required' => 'Bạn cần nhập mô tả cho danh mục!',
        ];
    }
}
