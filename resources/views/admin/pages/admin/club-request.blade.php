@extends('admin.layouts.master')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Câu lạc bộ - <span class="fw-normal">Yêu cầu đăng ký CLB</span>
                </h4>

                <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <span class="breadcrumb-item active">Yêu cầu đăng ký CLB</span>
                </div>

                <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Scrollable datatable -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Danh sách yêu cầu đăng ký CLB</h5>
            </div>

            <table class="table datatable-scroll-y" width="100%">
                <thead>
                <tr>
                    <th>Tên CLB</th>
                    <th>Người đăng ký</th>
                    <th>Email</th>
                    <th>Mô tả</th>
                    <th>Ngày đăng ký</th>
                    <th>Trạng thái</th>
                    <th class="text-center">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>CLB Bóng Rổ</td>
                    <td><a href="#">Nguyễn Văn A</a></td>
                    <td>nguyenvana@example.com</td>
                    <td>Phát triển kỹ năng bóng rổ</td>
                    <td>2024-06-10</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Chờ duyệt</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item text-success" data-bs-toggle="modal" data-bs-target="#approveModal">
                                        <i class="ph-check-circle me-2"></i>
                                        Duyệt
                                    </a>
                                    <a href="#" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#rejectModal">
                                        <i class="ph-x-circle me-2"></i>
                                        Từ chối
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>CLB Văn Học</td>
                    <td><a href="#">Trần Thị B</a></td>
                    <td>tranthib@example.com</td>
                    <td>Thảo luận và sáng tác văn học</td>
                    <td>2024-06-08</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Chờ duyệt</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item text-success">
                                        <i class="ph-check-circle me-2"></i>
                                        Duyệt
                                    </a>
                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="ph-x-circle me-2"></i>
                                        Từ chối
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>CLB Mỹ Thuật</td>
                    <td><a href="#">Lê Văn C</a></td>
                    <td>levanc@example.com</td>
                    <td>Phát triển khả năng hội họa</td>
                    <td>2024-06-05</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Từ chối</span></td>
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
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>CLB Khoa Học</td>
                    <td><a href="#">Phạm Thị D</a></td>
                    <td>phamthid@example.com</td>
                    <td>Nghiên cứu khoa học</td>
                    <td>2024-06-01</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Đã duyệt</span></td>
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

    <!-- Approve Modal -->
    <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-success">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="approveModalLabel">Duyệt Yêu Cầu</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn <strong class="text-success">DUYỆT</strong> yêu cầu này không?</p>
                    <textarea class="form-control" rows="3" placeholder="Nhập ghi chú (tùy chọn)"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-success">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-danger">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="rejectModalLabel">Từ Chối Yêu Cầu</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn <strong class="text-danger">TỪ CHỐI</strong> yêu cầu này không?</p>
                    <textarea class="form-control" rows="3" placeholder="Nhập lý do từ chối"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
@endsection

