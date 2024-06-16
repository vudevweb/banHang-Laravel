<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Http\Requests\PostCategoryRequest;
use App\Http\Requests\PostCategoryEditRequest;

class PostCategoryController extends Controller
{
    public function index()
    {
        $title = 'Danh mục bài viết';
        $post_category = PostCategory::all();
        return view('admin.page.post.post-category.index', compact(
            'title',
            'post_category'
        ));
    }

    public function create()
    {
        $title = 'Thêm mới danh mục bài viết';
        return view('admin.page.post.post-category.create', compact('title'));
    }

    public function store (PostCategoryRequest $request) {
        $data = request()->validate([
            'title' => 'required|unique:post_categories,title',
            'slug' => 'required|unique:post_categories,slug',
        ]);
        $data['user_id'] = auth()->user()->id;
        PostCategory::create($data);
        return redirect()->route('admin.post-category')->with('success', 'Thêm mới danh mục thành công');
    }

    public function edit($id)
    {
        $title = 'Chỉnh sửa danh mục bài viết';
        $post_category = PostCategory::find($id);
        return view('admin.page.post.post-category.edit', compact(
            'title',
            'post_category'
        ));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'title' => 'required|unique:post_categories,title,' . $id,
            'slug' => 'required|unique:post_categories,slug,' . $id,
            'publish' => 'not_in:0',
        ]);

        // dd($data);
        PostCategory::find($id)->update($data);
        return redirect()->route('admin.post-category')->with('success', 'Cập nhật danh mục thành công');
    }


    public function delete($id)
    {
        PostCategory::find($id)->delete();
        return redirect()->route('admin.post-category')->with('success', 'Xóa danh mục thành công');
    }
}
