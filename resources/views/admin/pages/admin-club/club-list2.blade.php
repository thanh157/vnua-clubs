@extends('admin.layouts.masterc2')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Danh sách đăng ký tham gia câu lạc bộ</span></h4>
                <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Scrollable datatable -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Danh sách các đơn cần duyệt</h5>
            </div>

            <table class="table datatable-scroll-y" width="100%">
                <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Mã SV</th>
                    <th>Lớp</th>
                    <th>SDT</th>
                    <th>Giới tính</th>
                    <th>Mục đích tham gia</th>
                    <th>Trạng thái</th>
                    <th class="text-center">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">Nguyễn Văn A</a></td>
                    <td>6667828</td>
                    <td>CTK42</td>
                    <td>092376474</td>
                    <td>Nam</td>
                    <td>Chơi bóng đá</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Chờ phê duyệt</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewFormModal">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-check-circle me-2"></i>
                                        Phê duyệt
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
                <!-- Thêm các dòng khác tương tự -->
                </tbody>
            </table>
        </div>
        <!-- /scrollable datatable -->
    </div>
    <!-- /content area -->

    <!-- Modal -->
    <div class="modal fade" id="viewFormModal" tabindex="-1" aria-labelledby="viewFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewFormModalLabel">Chi tiết đơn đăng kí tham gia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('admin.pages.admin-club.form-member')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
@endsection