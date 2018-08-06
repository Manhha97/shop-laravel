<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'name' =>'required|min:4',
            'short_content'=>'required|min:4',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Nhập Tên Sản Phẩm',
            'name.min'=>'Tên Quá Ngắn',
            'short_content.required'=>'Nhập Nội Dung',
            'short_content.min'=>'Nội Dung Quá Ngắn',
        ];
    }
}
