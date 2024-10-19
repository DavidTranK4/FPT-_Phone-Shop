<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dangKyValid extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array {
        return [
            'name' => ['required','min:2', 'max:30'],
            'email' => 'required|email|ends_with:@gmail.com',
            'mk1' => 'required|min:6|same:mk2',
            'mk2' => 'required|min:6'
            ];
        }
        public function messages() {
            return [
             'name.required' => 'Phải nhập họ tên nha bạn ơi',
             'name.min' => 'Nhập họ tên ít nhất 2 ký tự',
             'name.max' => 'Họ tên gì mà dài quá thế',
             'email.required' => 'Chưa nhập email',
             'email.email' => 'Nhập email chưa đúng',
             'email.ends_with' => 'Email phải có đuôi là gmail.com',
             'mk1.required' => 'Bạn chưa nhập mật khẩu',
             'mk1.min' => 'Mật khẩu từ 6 ký tự trở lên',
             'mk1.same' => 'Hai mật khẩu không giống nhau',
             'mk2.required' => 'Bạn chưa nhập lại mật khẩu',
             'mk2.min' => 'Mật khẩu nhập lại cùng từ 6 ký tự trở lên'
           ];
         }
    
}
