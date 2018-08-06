<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'code' =>'unique:products|required|numeric',
            'name'=>'required',
            'original_price'=>'required|numeric',
            'price'=>'required|numeric',
            'description'=>'required',
            'category'=>'required',
            'vendor_id'=>'required',
            'thumbnail'=>'required',
        ];
    }
    public function messages(){
        return[
            'code.required'=>'Nhập Mã Sản Phẩm',
            'code.unique'=>'Mã Sản Phẩm Đã Trùng!!!Mới nhập lại',
            'code.numeric'=>'Mã Là Số',
            'name.required'=>'Nhập Tên Sản Phẩm',
            'original_price.required'=>'Nhập Giá Nhập',
            'original_price.numeric'=>'Giá Là Số',
            'price.required'=>'Nhập Giá Bán',
            'price.numeric'=>'Giá Là Số',
            'description.required'=>'Không được để trống',
            'category.required'=>'Không được để trống',
            'vendor_id.required'=>'Không được để trống',
            'thumbnail.required'=>'Thêm ảnh',
        ];
    }
}
