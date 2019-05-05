<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name_vi' => 'required',
            'name_en' => 'required',
            'address_vi' => 'required',
            'address_en' => 'required',
            'phone' => 'required|regex:/(0)[0-9]{9}$/',
            'scenic' => 'required',
            'standard' => 'required|integer',
            'image' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'name_vi.required' => 'Bạn chưa nhập tên khách sạn tiếng việt.',
            'name_en.required' => 'Bạn chưa nhập tên khách sạn tiếng anh.',
            'address_vi.required' => 'Bạn chưa nhập địa chỉ tiếng việt.',
            'address_en.required' => 'Bạn chưa nhập địa chỉ tua tiếng anh.',
            'phone.required' => 'Bạn chưa nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại bạn nhập không đúng định dạng.',
            'scenic.required' => 'Bạn chưa chọn điểm đến.',
            'standard.integer' => 'Tiêu chuẩn phải là số nguyên.',
            'standard.required' => 'Bạn chưa nhập tiêu chuẩn.',
            'image.required' => 'Bạn chưa chọn hình ảnh.',
            'image.image' => 'Tệp được chọn phải là tệp hình ảnh.',

        ];
    }
}
