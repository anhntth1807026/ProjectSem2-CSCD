<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidation extends FormRequest
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
            'name' => 'required|max:50|min:3',
            'description' => 'required',
            'thumbnail' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
            'name.min' => 'Tên quá ngắn, vui lòng nhập ít  nhất 3 ký tự.',
            'description.required' => 'Vui lòng nhập miêu tả sản phẩm.',
            'thumbnail.required' => 'Vui lòng nhập ảnh cho sản phẩm.',
            'quantity.required' => 'Vui lòng nhập số lượng sản phẩm.',
            'price.required' => 'Vui lòng nhập giá cho sản phẩm.'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $name = $this->get('name');
            if ($name == 'Sex') {
                $validator->errors()->add('name', 'Tên không phù hợp, sử dụng từ ngữ không đúng với thuần phong mỹ tục!');
            }
        });
    }
}
