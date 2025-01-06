@extends('admin.layouts.masterc2')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Danh sách đơn tham gia câu lạc bộ</span></h4>
                <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Search bar -->
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tìm kiếm đơn tham gia</h5>
                <div class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search-application" placeholder="Tìm kiếm đơn tham gia">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scrollable datatable -->
        <div class="card">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên thành viên</th>
                        <th>Ngày đăng ký</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody id="application-list">
                    <!-- Dữ liệu mẫu -->
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>2023-10-01</td>
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

@section('styles')
<style>
    .form-group label {
        font-weight: bold;
    }
    .form-group input, .form-group textarea {
        margin-bottom: 10px;
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }
    .table th {
        background-color: #f8f9fa;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tìm kiếm đơn tham gia
        document.getElementById('search-application').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var rows = document.querySelectorAll('#application-list tr');
            rows.forEach(function(row) {
                var memberName = row.cells[0].textContent.toLowerCase();
                if (memberName.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection