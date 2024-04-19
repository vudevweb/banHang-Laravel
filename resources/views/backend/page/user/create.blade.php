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

          <form>
               <!-- Thông tin chung -->
               <div class="card mb-4">
                    <!-- card body -->
                    <div class="card-body">
                         <div class="mb-4">
                              <h4 class="mb-1">Thông tin chung</h4>
                              <p>Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>
                         </div>
                         <!-- row -->
                         <div class="row gx-3">
                              <!-- họ và tên -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="firstName">Họ & tên <span
                                             class="text-danger">(*)</span></label>
                                   <input type="text" class="form-control" placeholder="Nhập họ & tên" id="fullName"
                                        name="fullName" required>
                              </div>

                              <!-- email -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="email">Email <span
                                             class="text-danger">(*)</span></label>
                                   <input type="text" class="form-control" placeholder="Nhập email" id="email"
                                        name="email" required>

                              </div>

                              <!-- Ngày sinh -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="birthday">Ngày sinh</label>
                                   <input type="date" class="form-control" id="birthday" name="birthday" required>
                              </div>

                              <!-- Nhóm thành viên -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="role">Nhóm thành viên <span
                                             class="text-danger">(*)</span></label>
                                   <select class="form-select" aria-label="Default select example" id="role" name="role"
                                        required>
                                        <option selected>-- Chọn nhóm thành viên --</option>
                                        <option value="admin">Admin</option>
                                        <option value="customer">Customer</option>
                                   </select>
                              </div>

                              <!-- pass  -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="pass">Mật khẩu <span
                                             class="text-danger">(*)</span></label>
                                   <input type="text" class="form-control" placeholder="Nhập mật khẩu" id="pass"
                                        required>
                              </div>

                              <!-- pass confirm -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="passC">Mật khẩu xác nhận <span
                                             class="text-danger">(*)</span></label>
                                   <input type="text" class="form-control" placeholder="Nhập mật khẩu xác nhận"
                                        id="passC" required>
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
                                   <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="phone" name="phone"
                                        required>
                              </div>

                              <!-- Tỉnh/Thành phố -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="city">Tỉnh/Thành phố</label>
                                   <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                        <option selected>-- Chọn Tỉnh/Thành phố--</option>
                                        <option value="1">India</option>
                                        <option value="2">UK</option>
                                        <option value="3">US</option>
                                   </select>
                              </div>

                              <!-- Quận/Huyện -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="district">Quận/Huyện</label>
                                   <select class="form-select" aria-label="Default select example" id="district" name="district"
                                        required>
                                        <option selected>-- Chọn Quận/Huyện --</option>
                                        <option value="1">India</option>
                                        <option value="2">UK</option>
                                        <option value="3">US</option>
                                   </select>
                              </div>

                              <!-- Phường/Xã -->
                              <div class="mb-3 col-md-6">
                                   <label class="form-label" for="ward">Phường/Xã</label>
                                   <select class="form-select" aria-label="Default select example" id="ward" name="ward" required>
                                        <option selected>-- Chọn Phường/Xã --</option>
                                        <option value="1">India</option>
                                        <option value="2">UK</option>
                                        <option value="3">US</option>
                                   </select>
                              </div>
                              
                              {{-- Chi tiết --}}
                              <div class="col-md-12">
                                   <label for="address" class="form-label">Địa chỉ</label>
                                   <textarea class="form-control" id="address" name="address" rows="3"
                                        placeholder="Write a Notes"></textarea>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="d-flex justify-content-end">
                    <!-- buttons -->
                    <a href="#" class="btn btn-outline-primary me-2">Cancel</a>
                    <button class="btn btn-primary" type="submit">Save Customer</button>
               </div>
          </form>
     </div>
</div>