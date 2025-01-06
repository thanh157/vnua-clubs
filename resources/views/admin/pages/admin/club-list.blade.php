@extends('admin.layouts.master')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Câu lạc bộ - <span class="fw-normal">Danh sách CLB</span>
                </h4>

                <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>

        {{-- <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <span class="breadcrumb-item active">Câu lạc bộ</span>
                </div>

                <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div> --}}
        </div>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tìm kiếm câu lạc bộ</h5>
                <div class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search-activity" placeholder="Tìm kiếm câu lạc bộ">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Scrollable datatable -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Danh sách câu lạc bộ</h5>
            </div>

            <table class="table datatable-scroll-y" width="100%">
                <thead>
                <tr>
                    <th>Tên CLB</th>
                    <th>Chủ tịch</th>
                    <th>Mô tả</th>
                    <th>Ngân sách</th>
                    <th>Trạng thái</th>
                    <th class="text-center">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>CLB Bóng Đá</td>
                    <td><a href="#">Nguyễn Văn A</a></td>
                    <td>Đào tạo và phát triển tài năng bóng đá</td>
                    <td>500,000,000 VNĐ</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Hoạt động</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="ph-x-circle me-2"></i>
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>CLB Cờ Vua</td>
                    <td><a href="#">Trần Thị B</a></td>
                    <td>Phát triển tư duy chiến thuật</td>
                    <td>200,000,000 VNĐ</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Chờ duyệt</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="ph-x-circle me-2"></i>
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>CLB Âm Nhạc</td>
                    <td><a href="#">Lê Văn C</a></td>
                    <td>Phát triển tài năng âm nhạc</td>
                    <td>300,000,000 VNĐ</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Đình chỉ</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="ph-x-circle me-2"></i>
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>CLB Robotics</td>
                    <td><a href="#">Phạm Thị D</a></td>
                    <td>Nghiên cứu và phát triển robot</td>
                    <td>1,000,000,000 VNĐ</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Không hoạt động</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="ph-x-circle me-2"></i>
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /scrollable datatable -->
    </div>
    <!-- /content area -->
@endsection
