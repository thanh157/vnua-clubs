@extends('client.layouts.master')

@section('title')
    Đăng ký tài khoản
@endsection

@section('content')

<!-- Nội dung trang -->
<div class="page-content">

    <!-- Nội dung chính -->
    <div class="content-wrapper">

        <!-- Nội dung bên trong -->
        <div class="content-inner">

            <!-- Khu vực nội dung -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Thẻ đăng ký với khung -->
                <form class="login-form needs-validation" action="" method="POST" novalidate onsubmit="return validatePassword()">
                    <div class="cardst mb-0" style="border: 2px solid #ccc; border-radius: 10px; padding: 20px; background-color:#fff">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                    <!-- Logo -->
                                    <img src="{{asset('assets/client/images/logo-vnua.jpg')}}" class="rounded-circle" style="height: 100px" alt="Logo">
                                </div>
                                <h5 class="mb-0">Đăng ký tài khoản</h5>
                                <span class="d-block text-muted">Nhập thông tin tài khoản của bạn bên dưới</span>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="email" class="form-control" name="email" placeholder="Nhập email của bạn" required>
                                    <div class="invalid-feedback">Vui lòng nhập email của bạn</div>
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-envelope text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Mật khẩu -->
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" required>
                                    <div class="invalid-feedback">Vui lòng nhập mật khẩu của bạn</div>
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Nhập lại mật khẩu -->
                            <div class="mb-3">
                                <label class="form-label">Nhập lại mật khẩu</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu" required>
                                    <div id="passwordError" class="text-danger" style="display:none;">Vui lòng nhập lại đúng mật khẩu</div>
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Nút gửi -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100" style="padding: 10px 12px; border-radius: 10px; font-size: 14px" onclick="showSuccessMessage(event)">Đăng ký</button>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- /thẻ đăng ký với khung -->

            </div>
            <!-- /khu vực nội dung -->

        </div>
        <!-- /nội dung bên trong -->

    </div>
    <!-- /nội dung chính -->

</div>
<!-- /nội dung trang -->

<!-- Success message -->
<div id="successMessage" style="display: none; text-align: center; margin-top: 20px; margin-bottom: 100px; font-size: 18px; color: green;">
    <p><strong>Đăng ký thành công!</strong></p>
    <p>Cảm ơn bạn đã đăng ký tài khoản.</p>
    <a href="{{ route('client.edit')}}" class="btn btn-primary mt-3" style="height: 50px; font-size: 16px;">Chỉnh sửa hồ sơ của bạn</a>
</div>


@endsection

