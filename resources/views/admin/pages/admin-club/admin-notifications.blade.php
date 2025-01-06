@extends('admin.layouts.masterc2')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Đăng thông báo tuyển thành viên</span></h4>
                <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Notification Form -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Thông báo tuyển thành viên</h5>
            </div>
            <div class="card-body">
                <form id="notification-form">
                    <div class="form-group mb-3">
                        <label for="notification_date">Ngày đăng</label>
                        <input type="date" class="form-control" id="notification_date" name="notification_date" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="notification_description">Mô tả</label>
                        <textarea class="form-control" id="notification_description" name="notification_description" rows="4" required></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Đăng thông báo</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Notification List -->
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Danh sách thông báo</h5>
                <div style="display: flex; width: 25%; border: 1px solid #ced4da; border-radius: 4px; overflow: hidden;">
                    <input type="text" id="search-notification" placeholder="Tìm kiếm thông báo" style="flex: 1; border: none; padding: 5px 10px;">
                    <span style="background-color: #f8f9fa; padding: 5px 10px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-search" style="font-size: 16px; color: #6c757d;"></i>
                    </span>
                </div>
            </div>
            
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ngày đăng</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="notification-list">
                        <!-- Dữ liệu mẫu -->
                        <tr>
                            <td>2023-10-01</td>
                            <td>Thông báo tuyển thành viên cho câu lạc bộ ABC...</td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewFormModal">
                                                <i class="ph-eye me-2"></i>
                                                Chỉnh sửa thông báo
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
                        <!-- Thêm các dòng dữ liệu khác tại đây -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Edit Notification Form -->
        {{-- <div class="card mt-4" id="edit-notification-card" style="display: none;">
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewFormModal">
                    <i class="ph-eye me-2"></i>
                    Chỉnh sửa thông báo
                </a>
            </div>
            <div class="card-body">
                <form id="edit-notification-form">
                    <div class="form-group mb-3">
                        <label for="edit_notification_date">Ngày đăng</label>
                        <input type="date" class="form-control" id="edit_notification_date" name="edit_notification_date" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit_notification_description">Mô tả</label>
                        <textarea class="form-control" id="edit_notification_description" name="edit_notification_description" rows="4" required></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        <button type="button" class="btn btn-secondary" id="cancel-edit">Hủy</button>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
    <div class="modal fade" id="viewFormModal" tabindex="-1" aria-labelledby="viewFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewFormModalLabel">Chi tiết đơn đăng kí tham gia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('admin.pages.admin-club.form-edit-notification')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
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
        // Tìm kiếm thông báo
        document.getElementById('search-notification').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var rows = document.querySelectorAll('#notification-list tr');
            rows.forEach(function(row) {
                var description = row.cells[1].textContent.toLowerCase();
                if (description.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Hiển thị form chỉnh sửa khi nhấn vào nút "Chỉnh sửa"
        document.querySelectorAll('.btn-edit').forEach(function(button) {
            button.addEventListener('click', function() {
                var row = this.closest('tr');
                var date = row.cells[0].textContent;
                var description = row.cells[1].textContent;

                document.getElementById('edit_notification_date').value = date;
                document.getElementById('edit_notification_description').value = description;

                document.getElementById('edit-notification-card').style.display = 'block';
                window.scrollTo(0, document.getElementById('edit-notification-card').offsetTop);
            });
        });

        // Hủy chỉnh sửa
        document.getElementById('cancel-edit').addEventListener('click', function() {
            document.getElementById('edit-notification-card').style.display = 'none';
        });
    });
</script>
@endsection