<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostEditRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this->merge([
            'id' => $this->route('id'), // lấy id từ route post/edit/{id}
        ]);
    }
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
        $postId = $this->id ?? null;
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'post_category_id ' => 'not_in:0',
            'content' => 'required',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $postId,
        ];
    }



    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'title.required' => 'Tiêu đề không được để trống',
            'title.string' => 'Tiêu đề phải là chuỗi',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự',
            'content.required' => 'Nội dung không được để trống',
            'content.string' => 'Nội dung phải là chuỗi',
            'post_category_id.not_in' => 'Danh mục không được để trống',
            'slug.required' => 'Đường dẫn bài viết không được để trống',
            'slug.unique' => 'Đường dẫn bài viết đã tồn tại',
        ];
    }
}
