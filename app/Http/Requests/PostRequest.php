<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'content' => 'required',
            // 'meta_title' => 'required',
            // 'tags' => 'required',
            // 'meta_description' => 'required',
            // 'thumbnail' => 'required',
            'post_category_id' => 'not_in:0',
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
            'slug.required' => 'Đường dẫn bài viết không được để trống',
            'slug.unique' => 'Đường dẫn bài viết đã tồn tại',
            'content.required' => 'Nội dung không được để trống',
            // 'meta_title.required' => 'Meta title không được để trống',
            // 'tags.required' => 'Tags không được để trống',
            // 'meta_description.required' => 'Meta description không được để trống',
            'thumbnail.required' => 'Ảnh bài viết không được để trống',
            'post_category_id.not_in' => 'Danh mục chưa được chọn',
        ];
    }
}
