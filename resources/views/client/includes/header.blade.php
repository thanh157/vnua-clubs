<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#3a9109;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- logo --}}
        <a class="navbar-brand" href="#"><img src="{{asset('assets/client/images/logo-vnua.jpg')}}" class="rounded-circle" alt="#" style="width:60px; height:60px; object-fit:cover"></a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-5 mb-2 mb-lg-0" style="font-weight:450; color: #fff;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('client.home')}}" style="color: #fff;">
                        <i class="fas fa-home"></i> Trang chủ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.activities')}}" style="color: #fff;">
                        <i class="fas fa-users"></i> Hoạt động
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.notifications')}}" style="color: #fff;">
                        <i class="fas fa-bell"></i> Thông báo
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm câu lạc bộ" aria-label="Search" style="width:350px;">
                <button class="btn" type="submit" style="color: #fff; background-color: #dd0921cc;">Tìm kiếm</button>
            </form>
        </div>
        {{-- log in and log out --}}
        <div class="d-flex align-items-center text-success" style="font-family: Arial, sans-serif; color: #fff;">
            <div class="me-2">
                @auth
                <a href="#" class="text-decoration-none" style="font-size: 34px; color: #fff;">
                    <img src="{{ Auth::user()->avatar_url ?? asset('https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/431968918_1408471566698978_892730662987273362_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeExdgGrvIahDVOfRpFR6ktPGK8q0_gLGLUYryrT-AsYtZqthgN0kgm1hM-MbgAWC_hlOMehWe3gXa_tkYURbSST&_nc_ohc=sDJpi6o6DcIQ7kNvgHS7lGN&_nc_zt=23&_nc_ht=scontent-hkg4-1.xx&_nc_gid=AzBmTPeU5oM_MuNCY-1eB30&oh=00_AYAkaZmCkQBa_sAhiQasSTK4qAOcTBgoXlmjbuGBTTNUqw&oe=6778D2D6') }}"
                        alt=""
                        class="rounded-circle"
                        style="height: 40px; width: 40px; object-fit: cover; border-radius: 50%;">
                </a>
                @else
                <a href="#" class="text-decoration-none" style="font-size: 34px; color: #fff;">
                    <i class="fas fa-user"></i>
                </a>
                @endauth
            </div>
            <div class="text-start me-5">
                @auth
                <span class="d-block fw-bold text-uppercase" style="font-size: 14px; color: #fff100;">{{ Auth::user()->name }}</span>
                <div style="font-size: 14px;">
                    @if(Auth::user()->role->value === 'ADMIN')
                    <a href="{{ route('admin.dashboard') }}" class="text-decoration-none login-link" style="color: #fff;">Admin</a>
                    @endif
                    @if(Auth::user()->role->value === 'ADMIN_CLUB' && Auth::user()->clubs->count() > 0)
                    <a href="{{ route('admin-club') }}" class="text-decoration-none login-link" style="color: #fff;">Admin CL</a>
                    @endif
                    <form id="logout-form" action="{{ route('client.logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-link text-decoration-none login-link" style="color: #fff; padding: 0;">Đăng xuất</button>
                    </form>
                </div>
                @else
                <span class="d-block fw-bold text-uppercase" style="font-size: 14px; color: #fff100;">Tài khoản</span>
                <div style="font-size: 14px;">
                    <a href="{{ route('client.sign-up')}}" class="text-decoration-none login-link" style="color: #fff; padding-right: 8px;">Đăng ký</a>
                    <a href="{{ route('client.login')}}" class="text-decoration-none login-link" style="color: #fff;">Đăng nhập</a>
                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var alert = document.getElementById('success-alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
            }
        }, 3000);
    });
</script>
@endif

<!-- Thêm CSS cho hiệu ứng hover cho tất cả các liên kết trong navbar -->
<style>
    .navbar-nav .nav-link {
        transition: all 0.3s ease;
        /* Thêm hiệu ứng chuyển động khi hover */
        color: #fff;
        /* Đảm bảo màu chữ ban đầu là màu trắng */
    }

    .navbar-nav .nav-link:hover {
        color: orange !important;
        /* Thêm !important để đảm bảo màu chữ thay đổi */
        font-weight: bold;
        /* Làm chữ đậm hơn */
        transform: scale(1.1);
        /* Làm chữ to ra một chút */
    }

    .login-link {
        transition: all 0.3s ease;
        /* Thêm hiệu ứng chuyển động khi hover */
        color: #fff;
        /* Đảm bảo màu chữ ban đầu là màu trắng */
    }

    .login-link:hover {
        color: #f26828 !important;
        /* Thêm !important để đảm bảo màu chữ thay đổi */
        font-weight: bold;
        /* Làm chữ đậm hơn */
        transform: scale(1.1);
        /* Làm chữ to ra một chút */
    }
</style>