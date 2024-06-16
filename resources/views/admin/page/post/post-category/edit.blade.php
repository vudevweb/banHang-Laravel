@extends('admin.layout')

@section('page')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-3 mb-3">
            <div>
                <h1 class="mb-1 h2 fw-bold">{{ $title ? $title : 'Chưa có tiêu đề' }}</h1>
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


<div class="row ">
    <div class="offset-xl-3 col-xl-6 col-12">
        <form action="{{ route('admin.post-category.update', $post_category->id) }}" method="POST">
            @csrf
            <!-- Thông tin chung -->
            <div class="card mb-4">
                <!-- card body -->
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="mb-1">{{ $title ? $title : 'Chưa có tiêu đề' }}</h4>
                        <p>Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>

                        @if ($errors->any())
                        <div class="alert alert-danger ps-5">
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <!-- row -->
                    <div class="row gx-3">
                        <!-- họ và tên -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="title_category">Họ & tên <span
                                    class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập tên danh mục" id="title_category"
                                name="title" value="{{ $post_category->title }}">
                        </div>

                        <!-- email -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="slug_category">slug <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập slug" id="slug_category" name="slug"
                                value="{{ $post_category->slug }}">

                        </div>


                        <!-- Nhóm thành viên -->
                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="publish">Trạng thái<span
                                    class="text-danger">(*)</span></label>
                            <select class="form-select" aria-label="Default select example" id="publish" name="publish"
                                value="{{ old('publish') }}">
                                <option value="0">-- Chọn Trạng thái --</option>
                                <option value="1" {{ $post_category->publish == 1 ? 'selected' : '' }}>Hiển thị</option>
                                <option value="2" {{ $post_category->publish == 2 ? 'selected' : '' }}>Ẩn</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-end">
                <!-- buttons -->
                <a href="{{ route('admin.user') }}" class="btn btn-outline-danger me-2">Hủy</a>
                <button class="btn btn-primary" type="submit">Lưu</button>
            </div>
        </form>
    </div>
</div>

<script src="/library/seo.js"></script>

@endsection
