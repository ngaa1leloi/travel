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
            'price' => 'required',
            'quantity_person' => 'required',
            'time' => 'required',
            'date' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ];
    }
}
