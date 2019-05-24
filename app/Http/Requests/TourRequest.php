<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'process_vi' => 'required',
            'process_en' => 'required',
            'departure_vi' => 'required',
            'departure_en' => 'required',
            'price' => 'integer',
            'quantity_person' => 'integer',
            'category' => 'required',
            'image' => 'required|image',
            'hotel' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_vi.required' => 'Bạn chưa nhập tên tua tiếng việt.',
            'name_en.required' => 'Bạn chưa nhập tên tua tiếng anh.',
            'process_vi.required' => 'Bạn chưa nhập lịch trình tua tiếng việt.',
            'process_en.required' => 'Bạn chưa nhập lịch trình tua tiếng anh.',
            'departure_vi.required' => 'Bạn chưa nhập điểm xuất phát tiếng việt.',
            'departure_en.required' => 'Bạn chưa nhập điểm xuất phát tiếng anh.',
            'price.integer' => 'Bạn chưa nhập giá tua.',
            'quantity_person.integer' => 'Số người phải là số nguyên.',
            'category.required' => 'Bạn chưa chọn thể loại.',
            'image.required' => 'Bạn chưa chọn hình ảnh.',
            'image.image' => 'Tệp được chọn phải là tệp hình ảnh.',
            'hotel.required' => 'Bạn chưa chọn khách sạn.',
            'status.required' => 'Bạn chưa chọn trạng thái tua'
 
        ];
    }
}
