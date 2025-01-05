@extends('admin.layouts.masterc2')

@section('content')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Danh sách thành viên trong CLB</span></h4>
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
            <h5 class="mb-0">Các thành viên</h5>
        </div>

        <table class="table datatable-scroll-y" width="100%">
            <thead>
            <tr>
                <th>AVT</th>
                <th>Họ tên</th>
                <th>Mã SV</th>
                <th>Lớp</th>
                <th>SDT</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Trạng thái</th>
                <th class="text-center">Hành động</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <img src="{{asset('assets/client/images/logo-vnua.jpg')}}" alt="Avatar" class="rounded-circle" width="40" height="40">
                </td>
                <td>Nguyễn Văn A</td>
                <td>6667828</td>
                <td>CTK42</td>
                <td>092376474</td>
                <td>hd.thanh@gmail.com</td>
                <td>Nam</td>
                <td><span class="badge bg-success bg-opacity-10 text-success">Chủ tịch</span></td>
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
                                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editPositionModal">
                                    <i class="fa fa-pencil-alt me-2"></i>
                                    Thay đổi chức vụ
                                </a>
                                <a href="#" class="dropdown-item text-danger">
                                    <i class="ph-x-circle me-2"></i>
                                    Xóa chức vụ
                                </a>
                                <a href="#" class="dropdown-item text-danger">
                                    <i class="ph-x-circle me-2"></i>
                                    Xóa khỏi CLB
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
                <h5 class="modal-title" id="viewFormModalLabel">Thông tin chi tiết của thành viên</h5>
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

<!-- Modal Thay đổi chức vụ -->
<div class="modal fade" id="editPositionModal" tabindex="-1" aria-labelledby="editPositionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPositionModalLabel">Thay đổi chức vụ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('admin.pages.admin-club.form-staff')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('editPositionForm').submit();">Lưu thay đổi</button>
            </div>
        </div>
    </div>
</div>
@endsection