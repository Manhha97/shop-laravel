<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductDetailRequest extends FormRequest
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
            'code' =>'numeric',
            'name'=>'required',
            'original_price'=>'required|numeric|min:5',
            'price'=>'required|numeric|min:5',
            'description'=>'required',
            'category'=>'required',
            'vendor_id'=>'required',
        ];
    }
    public function messages(){
        return[
            'code.numeric'=>'Mã là số',
            'name.required'=>'Nhập tên sản phẩm',
            'original_price.required'=>'Nhập giá nhập',
            'original_price.numeric'=>'Giá là số',
            'original_price.min'=>'Giá phải ít nhất 5 kí',
            'price.required'=>'Nhập giá bán',
            'price.numeric'=>'Giá là số',
            'price.min'=>'Giá phải ít nhất 5 kí',
            'description.required'=>'không được để trống',
            'category.required'=>'không được để trống',
            'vendor_id.required'=>'không được để trống',
        ];
    }
}
