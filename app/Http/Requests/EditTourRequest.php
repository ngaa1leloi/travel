<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTourRequest extends FormRequest
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
            'price' => 'required|integer',
            'quantity_person' => 'required|integer',
            'time' => 'required',
            'date' => 'required',
            'category' => 'required',
            'image' => 'image',
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
            'price.required' => 'Giá tua phải là số nguyên.',
            'quantity_person.required' => 'Bạn chưa nhập số người.',
            'quantity_person.integer' => 'Số người phải là số nguyên.',
            'time.required' => 'Bạn chưa nhập thời gian.',
            'date.required' => 'Bạn chưa nhập ngày xuất phát.',
            'category.required' => 'Bạn chưa chọn thể loại.',
            'image.image' => 'Tệp được chọn phải là tệp hình ảnh.',

        ];
    }
}
