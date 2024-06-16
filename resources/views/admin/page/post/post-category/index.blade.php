@extends('admin.layout')

@section('page')

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
                            {{ $title ? $title : 'Chưa có tiêu đề' }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-md-12">
        <form action="{{ route('admin.post-category.store') }}" method="POST">
            @csrf
            <!-- Thông tin chung -->
            <div class="card mb-4">
                <!-- card body -->
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="mb-1">Thêm danh mục mới</h4>
                        <p>Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>

                        @if ($errors->any())
                        <div class="alert alert-danger ps-5">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <!-- row -->
                    <div class="row gx-3">
                        <!-- Tên danh mục -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="title_category">Tên danh mục<span
                                    class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập tên danh mục" id="title_category"
                                name="title" value="{{ old('title') }}">
                        </div>

                        <!-- Tên danh mục -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="slug_category">Slug (vd: thoi-su)<span
                                    class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập slug" id="slug_category" name="slug"
                                value="{{ old('slug') }}">
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Thêm</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-xl-8 col-md-12">
        <div class="card">
            <!-- card header  -->
            <div class="card-header">
                <h4 class="mb-1">Danh sách danh mục</h4>
            </div>
            <!-- table  -->
            <div class="card-body">
                <div class="table-card">
                    <table id="dataTableBasic" class="table table-hover table-centered" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Tên danh mục</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($post_category) && is_object($post_category))
                            @foreach ($post_category as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if ($item->publish == 1)
                                        <span class="badge bg-success">Hiển thị</span>
                                    @else
                                        <span class="badge bg-danger">Ẩn</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.post-category.edit', $item->id) }}" class="btn btn-sm btn-warning"> <i class="fe fe-edit"></i></a>
                                    <a href="{{ route('admin.post-category.delete', $item->id) }}" onclick="return confirm('Bạn chó chắc chắn muốn xóa danh mục {{ $item->title }}') " class="btn btn-sm btn-danger"> <i class="fe fe-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/library/seo.js"></script>

@endsection
