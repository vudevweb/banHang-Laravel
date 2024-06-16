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

<div class="row ">
    <div class="offset-xl-3 col-xl-6 col-12">
        <form action="{{ route('admin.user.update') }}" method="POST">
            @csrf
            <!-- Thông tin chung -->
            <div class="card mb-4">
                <!-- card body -->
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="mb-1">Thông tin chung</h4>
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
                        <!-- họ và tên -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="firstName">Họ & tên <span
                                    class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập họ & tên" id="fullName"
                                name="fullName" value="{{ $user->fullName }}">
                        </div>

                        <!-- email -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="email">Email <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập email" id="email" name="email"
                                value="{{ $user->email }}">

                        </div>

                        <!-- Ngày sinh -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="birthday">Ngày sinh</label>
                            <input type="date" class="form-control" id="birthday" name="birthday"
                                value="{{ $user->birthday }}">
                        </div>

                        <!-- Nhóm thành viên -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="role">Nhóm thành viên <span
                                    class="text-danger">(*)</span></label>
                            <select class="form-select" aria-label="Default select example" id="role" name="role"
                                value="{{ old('role') }}">
                                <option value="0">-- Chọn nhóm thành viên --</option>
                                <option value="1">Customer</option>
                                <option value="2">Admin</option>
                            </select>
                        </div>

                        <!-- pass  -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="password">Mật khẩu <span
                                    class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập mật khẩu" name="password"
                                id="password">
                        </div>

                        <!-- password confirm -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="passwordC">Mật khẩu xác nhận <span
                                    class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" placeholder="Nhập mật khẩu xác nhận" id="passwordC"
                                name="passwordC">
                        </div>
                    </div>

                </div>
            </div>

            <!--Địa chỉ -->
            <div class="card mb-4">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="mb-4">
                        <h4 class="mb-1">Địa chỉ</h4>
                        <p></p>
                    </div>

                    <!-- row -->
                    <div class="row gx-3">

                        <!-- phone -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phone">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="phone"
                                name="phone" value="{{ old('phone') }}">
                        </div>

                        <!-- Tỉnh/Thành phố -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="province_id">Tỉnh/Thành phố</label>
                            <select class="setupSelect2 form-select" aria-label="Default select example"
                                id="province_id" name="province_id">
                                <option selected>-- Chọn Tỉnh/Thành phố--</option>
                                @if (isset($provinces))
                                @foreach ($provinces as $province)
                                <option value="{{ $province->code }}">{{ $province->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>

                        <!-- Quận/Huyện -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="district_id">Quận/Huyện</label>
                            <select class="setupSelect2 form-select" aria-label="Default select example"
                                id="district_id" name="district_id">
                                <option selected>-- Chọn Quận/Huyện --</option>
                            </select>
                        </div>

                        <!-- Phường/Xã -->
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="ward_id">Phường/Xã</label>
                            <select class="setupSelect2 form-select" aria-label="Default select example" id="ward_id"
                                name="ward_id">
                                <option selected>-- Chọn Phường/Xã --</option>
                            </select>
                        </div>

                        {{-- Chi tiết --}}
                        <div class="col-md-12">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <textarea class="form-control" id="address" name="address" value="{{ old('address') }}"
                                rows="3" placeholder="Nhập địa chỉ chi tiết"></textarea>
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

@endsection
