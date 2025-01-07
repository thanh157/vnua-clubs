<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h6 class="sidebar-resize-hide flex-grow-1 my-auto">Quản lý CLB của bạn</h6>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->

        <!-- Dropdown chọn câu lạc bộ -->
        <div class="sidebar-section">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="clubDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(session('current_club_id'))
                    {{ \App\Models\Club::find(session('current_club_id'))->name }}
                    @else
                    Chọn câu lạc bộ
                    @endif
                </button>
                <ul class="dropdown-menu w-100" aria-labelledby="clubDropdown">
                    @foreach(Auth::user()->ownClubs as $club)
                    <li>
                        <a class="dropdown-item" href="{{ route('admin-club.workspace.select', $club->id) }}">
                            {{ $club->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- /Dropdown chọn câu lạc bộ -->

        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <li class="nav-item-header pt-0 mt-3">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Quản lý thành viên</div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-club.member-requests') }}" class="nav-link">
                        <i class="ph-check-square"></i>
                        <span>
                            Duyệt đơn đăng ký tham gia CLB
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-club.members') }}" class="nav-link">
                        <i class="ph-users"></i>
                        <span>Quản lý danh sách thành viên</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.admin-staff') }}" class="nav-link">
                        <i class="ph-user-circle"></i>
                        <span>Xem danh sách ban cán sự</span>
                    </a>
                </li>

                <!-- Event management -->
                <li class="nav-item-header pt-0 mt-3">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Quản lý sự kiện</div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.admin-active') }}" class="nav-link">
                        <i class="ph-calendar-plus"></i>
                        <span>Hoạt động sắp tới</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.events.update') }}" class="nav-link">
                <i class="ph-calendar-edit"></i>
                <span>Cập nhật sự kiện</span>
                </a>
                </li> --}}

                <!-- Club description management -->
                <li class="nav-item-header pt-0 mt-3">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Thông tin Câu lạc bộ</div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.admin-description') }}" class="nav-link">
                        <i class="ph-file-plus"></i>
                        <span>Chỉnh sửa mô tả chi tiết</span>
                    </a>

                    <!-- Club spending management -->
                <li class="nav-item-header pt-0 mt-3">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Quản lý chi tiêu</div>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.spending.income') }}" class="nav-link">
                <i class="ph-arrow-circle-up"></i>
                <span>Thu</span>
                </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.spending.expense') }}" class="nav-link">
                        <i class="ph-arrow-circle-down"></i>
                        <span>Chi</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('admin.admin-spending') }}" class="nav-link">
                        <i class="ph-graph"></i>
                        <span>Báo cáo chi tiêu</span>
                    </a>
                </li>

                <!-- Club announcements management -->
                <li class="nav-item-header pt-0 mt-3">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Thông báo</div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.admin-notifications') }}" class="nav-link">
                        <i class="ph-megaphone-slash"></i>
                        <span>Quản lý thông báo</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>
<!-- /main sidebar -->