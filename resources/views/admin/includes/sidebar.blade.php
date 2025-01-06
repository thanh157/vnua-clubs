<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h6 class="sidebar-resize-hide flex-grow-1 my-auto">Phần mềm quản lý câu lạc bộ</h6>

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


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide"></div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="ph-house"></i>
                        <span>
                            Trang điều khiển
{{--                            <span class="d-block fw-normal opacity-50">No pending orders</span>--}}
                        </span>
                    </a>
                </li>

                <!-- Club list -->
                <li class="nav-item-header pt-0 mt-3">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Câu lạc bộ</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.clubs') }}" class="nav-link">
                        <i class="ph-users-three"></i>
                        <span>
                            Câu lạc bộ
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.club-request') }}" class="nav-link">
                        <i class="ph-file-plus"></i>
                        <span>
                            Đơn đăng ký câu lạc bộ
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>
<!-- /main sidebar -->
