<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostEditRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'postCategory'])->get();
        $title = 'Tất cả bài viết';
        return view('admin.page.post.post-view.index', compact(
            'title',
            'posts'
        ));
    }

    public function create()
    {
        $postCategories = PostCategory::all();
        $title = 'Thêm bài viết';
        return view('admin.page.post.post-view.create', compact(
            'title',
            'postCategories'
        ));
    }

    public function store(PostRequest $request)
    {
        // dd($request->all());
        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->tags;
        $post->meta_description = $request->meta_description;
        $post->thumbnail = $request->thumbnail;
        $post->post_category_id = $request->post_category_id;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->route('admin.post')->with('success', 'Thêm bài viết thành công');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $postCategories = PostCategory::all();
        $title = 'Chỉnh sửa bài viết';
        return view('admin.page.post.post-view.edit', compact(
            'title',
            'post',
            'postCategories'
        ));
    }


    public function update(PostEditRequest $request, $id)
    {
        // dd($request->all());
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->tags;
        $post->meta_description = $request->meta_description;
        $post->thumbnail = $request->thumbnail;
        $post->post_category_id = $request->post_category_id;
        $post->publish = $request->publish;
        $post->save();
        return redirect()->route('admin.post')->with('success', 'Cập nhật bài viết thành công');
    }


    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.post')->with('success', 'Xóa bài viết thành công');
    }
}
