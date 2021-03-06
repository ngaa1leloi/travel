<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title_vi' => 'required',
            'title_en' => 'required',
            'content_vi' => 'required',
            'content_en' => 'required',
            'image' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'title_vi.required' => 'Bạn chưa nhập tiêu đề tiếng việt.',
            'title_en.required' => 'Bạn chưa nhập tiêu đề tiếng anh.',
            'content_vi.required' => 'Bạn chưa nhập nội dung tin tức tiếng việt.',
            'content_en.required' => 'Bạn chưa nhập nội dung tin tức tiếng anh.',
            'image.required' => 'Bạn chưa chọn hình ảnh.',
            'image.image' => 'Tệp được chọn phải là tệp hình ảnh.',

        ];
    }
}
