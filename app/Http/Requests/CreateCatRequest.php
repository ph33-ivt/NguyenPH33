<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCatRequest extends FormRequest
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
            'name'=> 'required|min:3|max:10',
            'age' => 'required|numeric',
            'breed_id' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bắt buộc nhập tên',
            'name.min' => 'Nhập tối thiểu 3 ký tự',
            'name.max' => 'Nhập tối đa 10 ký tự',
            'age.required' => 'Bắt buộc nhập tuổi',
            'age.numeric' => 'Bắt buộc phải là số',
        ];
    }
}
