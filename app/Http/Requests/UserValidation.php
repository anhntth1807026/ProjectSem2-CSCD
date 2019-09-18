<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
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
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'thumbnail' => 'thumbnail'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
            'name.min' => 'Tên quá ngắn, vui lòng nhập ít  nhất 3 ký tự.',
            'email.required' => 'Vui lòng nhập email.',
            'password.required' => 'Vui lòng nhập pasword .',
            'age.required' => 'Vui lòng nhập tuổi.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'gender.required' => 'Vui lòng nhập giới tính.',
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
