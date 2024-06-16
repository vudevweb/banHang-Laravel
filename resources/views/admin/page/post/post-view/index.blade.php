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
                                {{ $title ? $title : 'Chưa có title trang' }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- basic table -->
        <div class="col-md-12 col-12 mb-5">
            <div class="card">
                <!-- card header  -->
                <div class="card-header">
                    <button onclick="window.location.href='{{ route('admin.post.create') }}'" class="btn btn-success">Tạo
                        mới</button>
                </div>
                <!-- table  -->
                <div class="card-body">
                    <div class="table-card">
                        <table id="dataTableBasic" class="table table-hover table-centered" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Tiêu đề</th>
                                    <th>Tác giải</th>
                                    <th>Danh mục</th>
                                    <th>Ngày xuất bản</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($posts) && is_object($posts))
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                @if ($post->user)
                                                    {{ $post->user->fullName }}
                                                @else
                                                    Không có tác giả
                                                @endif
                                            </td>
                                            <td>
                                                @if ($post->postCategory)
                                                    {{ $post->postCategory->title }}
                                                @else
                                                    Không có danh mục
                                                @endif
                                            </td>
                                            <td>{{ $post->created_at }}</td>
                                            <td>
                                                @if ($post->publish == 1)
                                                    <span class="badge bg-success">Hiển thị</span>
                                                @else
                                                    <span class="badge bg-danger">Ẩn</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.post.edit', $post->id) }}"
                                                    class="btn btn-sm btn-warning"><i class="fe fe-edit"></i></a>
                                                <a href="{{ route('admin.post.delete', $post->id) }}"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')"
                                                    class="btn btn-sm btn-danger"><i class="fe fe-trash"></i></a>
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
@endsection
