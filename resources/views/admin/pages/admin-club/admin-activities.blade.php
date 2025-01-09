@extends('admin.layouts.masterc2')

@section('content')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Quản lý hoạt động</span></h4>
            <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Search bar và Button thêm hoạt động -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center w-100">
            <h5 class="mb-0">Danh sách hoạt động</h5>
            <div class="d-flex ms-auto">
                <form action="{{ route('admin-club.activities') }}" method="GET" class="d-flex me-3">
                    <div class="input-group">
                        <input type="text" name="keySearch" class="form-control" id="search-activity" placeholder="Tìm kiếm hoạt động" value="{{ request('keySearch') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <button class="btn btn-primary" id="btn-create" data-bs-toggle="modal" data-bs-target="#activityModal">Thêm hoạt động</button>
            </div>
        </div>
    </div>

    <!-- Danh sách hoạt động -->
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên hoạt động</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Ghi chú về thời gian</th>
                        <th>Địa điểm</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activities as $activity)
                    <tr>
                        <td>{{ $activity['name'] }}</td>
                        <td>{{ $activity['start_date'] }}</td>
                        <td>{{ $activity['end_date'] }}</td>
                        <td>{{ $activity['time_note'] }}</td>
                        <td>{{ $activity['location'] }}</td>
                        <td>{{ $activity['description'] }}</td>
                        <td>{{ $activity['status'] == 'active' ? 'Hoạt động' : 'Không hoạt động' }}</td>
                        <td>
                            <button class="btn btn-secondary btn-edit-activity" data-id="{{ $activity['id'] }}" data-name="{{ $activity['name'] }}" data-start_date="{{ $activity['start_date'] }}" data-end_date="{{ $activity['end_date'] }}" data-time_note="{{ $activity['time_note'] }}" data-location="{{ $activity['location'] }}" data-status="{{ $activity['status'] }}" data-description="{{ $activity['description'] }}" data-image="{{ $activity['image_url'] }}" data-bs-toggle="modal" data-bs-target="#activityModal">Chỉnh sửa</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /danh sách hoạt động -->

    <!-- Modal hoạt động -->
    <div class="modal fade" id="activityModal" tabindex="-1" aria-labelledby="activityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activityModalLabel">Hoạt động</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('admin.pages.admin-club.form-active', ['formId' => 'activityForm', 'prefix' => 'activity'])
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Hiển thị modal chỉnh sửa hoạt động khi nhấn nút "Chỉnh sửa"
        document.querySelectorAll('.btn-edit-activity').forEach(function(button) {
            button.addEventListener('click', function() {
                var modal = new bootstrap.Modal(document.getElementById('activityModal'));
                modal.show();

                // Điền dữ liệu vào form chỉnh sửa
                var form = document.getElementById('activityForm');
                form.action = '/admin-club/activities/' + this.getAttribute('data-id');
                form.method = 'POST';
                form.insertAdjacentHTML('beforeend', '<input type="hidden" name="_method" value="PATCH">');
                form.querySelector('input[name="name"]').value = this.getAttribute('data-name');

                // Định dạng lại thời gian cho input datetime-local
                var startDate = new Date(this.getAttribute('data-start_date')).toISOString().slice(0, 16);
                var endDate = new Date(this.getAttribute('data-end_date')).toISOString().slice(0, 16);

                form.querySelector('input[name="start_date"]').value = startDate;
                form.querySelector('input[name="end_date"]').value = endDate;
                form.querySelector('input[name="time_note"]').value = this.getAttribute('data-time_note');
                form.querySelector('input[name="location"]').value = this.getAttribute('data-location');
                form.querySelector('select[name="status"]').value = this.getAttribute('data-status');
                form.querySelector('textarea[name="description"]').value = this.getAttribute('data-description');

                // Khi modal được mở, tải ảnh hiện có
                var imageUrl = this.getAttribute('data-image'); // Lấy URL ảnh từ thuộc tính data-image
                loadExistingImage(imageUrl, 'activity-image-preview');
            });
        });

        // Hiển thị modal thêm hoạt động khi nhấn nút "Thêm hoạt động"
        document.getElementById('btn-create').addEventListener('click', function() {
            var modal = new bootstrap.Modal(document.getElementById('activityModal'));
            modal.show();

            // Đặt lại form để tạo mới hoạt động
            var form = document.getElementById('activityForm');
            form.action = '/admin-club/activities';
            form.method = 'POST';
            var methodInput = form.querySelector('input[name="_method"]');
            if (methodInput) {
                methodInput.remove();
            }
            form.reset();
        });

        // Đảm bảo modal được đóng hoàn toàn khi nhấn nút "Hủy"
        document.querySelectorAll('.btn-close, .btn-secondary').forEach(function(button) {
            button.addEventListener('click', function() {
                var modals = document.querySelectorAll('.modal');
                modals.forEach(function(modal) {
                    var bsModal = bootstrap.Modal.getInstance(modal);
                    if (bsModal) {
                        bsModal.hide();
                    }
                });

                // Loại bỏ lớp modal-backdrop
                var backdrops = document.querySelectorAll('.modal-backdrop');
                backdrops.forEach(function(backdrop) {
                    backdrop.remove();
                });
            });
        });
        // $('#activityModal').on('show.bs.modal', function(event) {
        //     var button = $(event.relatedTarget); // Nút đã kích hoạt modal
        //     var imageUrl = button.data('image'); // Lấy URL ảnh từ thuộc tính data-image
        //     console.log("image: ", imageUrl);
        //     loadExistingImage(imageUrl, 'activity-image-preview');
        // });

    });
</script>
@endsection