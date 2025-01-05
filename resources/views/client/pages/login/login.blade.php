@extends('client.layouts.master')


@section('title')
Đăng nhập
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

				<!-- Thẻ đăng nhập -->
				<form class="login-form needs-validation" method="POST" action="{{ route('client.login') }}" novalidate>
					<div class="cardst mb-0" style="border: 2px solid #ccc; border-radius: 10px; padding: 20px; background-color:#fff">
						<div class="card-body">
							<!-- <form method="POST" action="{{ route('client.login') }}"> -->
							@csrf
							<div class="text-center mb-3">
								<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
									<!-- Sửa lại kích thước và bo tròn hình logo -->
									<img src="{{asset('assets/client/images/logo-vnua.jpg')}}" class="rounded-circle" style="height: 100px" alt="Logo">
								</div>
								<h5 class="mb-0">Đăng nhập vào tài khoản của bạn</h5>
								<span class="d-block text-muted">Nhập thông tin tài khoản của bạn bên dưới</span>
							</div>

							<div class="mb-3">
								<label class="form-label">Mail</label>
								<div class="form-control-feedback form-control-feedback-start">
									<!-- <input type="text" class="form-control" placeholder="john@doe.com" required> -->
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="john@doe.com">
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
									<div class="invalid-feedback">Nhập tên người dùng của bạn</div>
									<div class="form-control-feedback-icon">
										<i class="ph-user-circle text-muted"></i>
									</div>
								</div>
							</div>

							<div class="mb-3">
								<label class="form-label">Mật khẩu</label>
								<div class="form-control-feedback form-control-feedback-start">
									<input type="password" id="password" class="form-control" name="password" required autocomplete="current-password" placeholder="•••••••••••" required>
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
									<div class="invalid-feedback">Nhập mật khẩu của bạn</div>
									<div class="form-control-feedback-icon">
										<i class="ph-lock text-muted"></i>
									</div>
								</div>
								<div class="invalid-feedback">Nhập mật khẩu của bạn</div>
							</div>

							<div class="d-flex align-items-center mb-3">
								<label class="form-check">
									<input type="checkbox" name="remember" class="form-check-input" checked>
									<span class="form-check-label">Ghi nhớ đăng nhập</span>
								</label>
								@if (Route::has('password.request'))
								<a href="login_password_recover.html" class="ms-auto">Quên mật khẩu?</a>
								@endif
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-primary w-100" style="padding: 10px 12px; border-radius: 10px; font-size: 14px">Đăng nhập</button>
							</div>
							{{-- <div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Chưa có tài khoản?</span>
								</div> --}}
						</div>
						<!-- </form> -->
					</div>
				</form>
				<!-- /thẻ đăng nhập -->
			</div>
			<!-- /khu vực nội dung -->
		</div>
	</div>
	@endsection