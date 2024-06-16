<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullName' => 'required|string',
            'email' => 'required|email|unique:users',
            'role' => 'required|integer|gt:0',
            'password' => 'required|min:6',
            'passwordC' => 'required|same:password'
        ];
    }

    public function messages(): array
    {
        return [
            'fullName.required' => 'Chưa nhập họ và tên',
            'fullName.string' => 'Họ và tên phải là ký tự',

            'email.required' => 'Chưa nhập email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',

            'role.gt'=>'Chưa chọn nhóm thành viên',

            'password.required' => 'Chưa nhập mật khẩu',
            'password.min' => 'Độ dài mật khẩu tối thiểu là 6',
            'password.string' => 'Độ dài mật khẩu tối thiểu là 6',

            'passwordC.required' => 'Chưa nhập mật khẩu xác nhận',
            'passwordC.same' => 'Mật khẩu xác nhận không trùng khớp',
        ];
    }
}
