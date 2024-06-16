@extends('admin.layout')

@section('page')
    <link rel="stylesheet" href="https://codescandy.com/geeks-bootstrap-5/assets/libs/@yaireo/tagify/dist/tagify.css">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3">
                <div>
                    <h1 class="mb-1 h2 fw-bold">{{ $title ? $title : 'Chưa có title trang' }}</h1>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">Dashboard</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $title ? $title : 'Chưa có title trang' }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <form class="row" form action="{{ route('admin.post.store') }}" method="POST">
        @csrf
        <div class="col-xl-12 col-md-12 mb-3">
            <div class="col-xl-12 d-flex justify-content-between">
                <!-- buttons -->
                <a href="{{ route('admin.post') }}" class="btn btn-outline-danger me-2">Quay về</a>
                <button class="btn btn-primary" type="submit">Đăng</button>
            </div>
        </div>
        <div class="col-xl-9 col-md-12">
            <!-- Thông nội dung tiêu đề -->
            @include('admin.page.post.post-view.components.create.formPost')

            {{-- SEO --}}
            @include('admin.page.post.post-view.components.create.formSeo')

        </div>

        <div class="col-xl-3 col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- <div class="col-xl-12 d-flex justify-content-between">
                        <!-- buttons -->
                        <a href="{{ route('admin.post') }}" class="btn btn-outline-danger me-2">Quay về</a>
                        <button class="btn btn-primary" type="submit">Đăng</button>
                    </div> --}}
                </div>
                <div class="card-body">
                    {{-- danh mục --}}
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="post_category_id">Danh mục<span
                                class="text-danger">(*)</span></label>
                        <select name="post_category_id" id="post_category_id" class="form-select setupSelect2">
                            <option value="0">-- Chọn danh mục --</option>
                            @foreach ($postCategories as $post_category)
                                <option value="{{ $post_category->id }}">{{ $post_category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- ảnh đại diện --}}
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="thumbnail">Ảnh thumbnail<span class="text-danger">(*)</span></label>
                        <input type="hidden" class="form-control" data-type="Images" id="thumbnail" name="thumbnail"
                            value="{{ old('thumbnail') }}">
                        <img src="\assets\base\images\no-image.jpg" class="img_demo img-fluid image-target" width="100%"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://codescandy.com/geeks-bootstrap-5/assets/libs/@yaireo/tagify/dist/tagify.min.js"></script>
    <script src="/plugins/ckeditor/ckeditor.js"></script>
    <script src="/plugins/ckfinder_2/ckfinder.js"></script>
    <script src="/library/finder.js"></script>
    <script src="/library/seo.js"></script>
@endsection
