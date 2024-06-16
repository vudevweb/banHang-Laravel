@extends('admin.layout')
@section('page')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3">
                <div>
                    <h1 class="mb-1 h2 fw-bold">{{ $title }}</h1>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">Dashboard</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $title }}
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
                    <button onclick="window.location.href='{{ route('admin.user.create') }}'" class="btn btn-success">Tạo
                        thành viên</button>
                </div>
                <!-- table  -->
                <div class="card-body">
                    <div class="table-card">
                        <table id="dataTableBasic" class="table table-hover table-centered" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>avatar</th>
                                    <th>Họ & tên</th>
                                    <th>email</th>
                                    <th>SĐT</th>
                                    <th>Địa chỉ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($users) && is_object($users))
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <img width="30"
                                                    src="https://ui-avatars.com/api/?background=random&name={{ $user->fullName }}"
                                                    alt="">
                                            </td>
                                            <td>{{ $user->fullName }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td></td>
                                            <td><span class="dropdown dropstart">
                                                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                        role="button" id="courseDropdown1" data-bs-toggle="dropdown"
                                                        data-bs-offset="-20,20" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.user.edit', $user->id) }}">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Chỉnh sửa
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Xóa
                                                        </a>
                                                    </span>
                                                </span></td>
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

@stop
