<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopCartRequest extends FormRequest
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
            'customer' =>'required',
            'phone' =>'required|numeric',
            'addr' =>'required',
            
            
        ];
    }
    public function messages(){
        return[
            'customer.required'=>'Nhập Tên người nhận',
            'phone.required'=>'Nhập số điện thoại',
            'phone.numeric'=>'Nhập số',
            'addr.required'=>'Nhập địa chỉ nhận hàng',
            
        ];
    }
}
