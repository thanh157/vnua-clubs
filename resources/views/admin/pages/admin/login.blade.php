<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    @include('admin.includes.head')
    <style>
        .custom-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            width: auto;
            z-index: 1050;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="page-content">
    @if(session('success'))
        <div class="alert bg-success text-white alert-dismissible fade show custom-alert">
            <div class="d-flex">
                <i class="ph-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
{{--                <livewire:admin.login.login-index/>--}}
                <!-- Login form -->
                <form class="login-form" wire:submit="login">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img style="width: 30%" src="{{ asset('assets/admin/images/logo_university.png') }}">
                            </div>
                            <div class="text-center mb-3">
                                <h5 class="mb-0">Đăng nhập tài khoản</h5>
                                <span class="d-block text-muted">Nhập thông tin đăng nhập của bạn bên dưới</span>
                            </div>

                            @error('error-login')
                            <div class="mb-3 text-center">
                                <label class="text-danger"> {{ $message }}</label>
                            </div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Tài khoản</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input wire:model.live="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Nhập tài khoản">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-user-circle text-muted"></i>
                                    </div>
                                    @error('username')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input wire:model.live="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="•••••••••••">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-lock text-muted"></i>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <label class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" checked>
                                    <span class="form-check-label">Ghi nhớ</span>
                                </label>

{{--                                <a href="{{ route('forgot-password') }}" class="ms-auto">Quên mật khẩu?</a>--}}
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-success w-100">Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /login form -->
            </div>
            <!-- /content area -->
        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
</body>
</html>
