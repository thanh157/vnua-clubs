@extends('admin.layouts.masterc2')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Quản lý hoạt động của CLB</span></h4>
                <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Lựa chọn hành động -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Lựa chọn hành động</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-around">
                    <button class="btn btn-primary" id="btn-create">Đăng hoạt động</button>
                    <button class="btn btn-secondary" id="btn-edit">Chỉnh sửa hoạt động đã đăng</button>
                </div>
            </div>
        </div>
        <!-- /lựa chọn hành động -->

        <!-- Form đăng hoạt động -->
        <div class="card mt-4" id="create-form" style="display: none;">
            <div class="card-header">
                <h5 class="mb-0">Đăng hoạt động</h5>
            </div>
            <div class="card-body">
                <form id="createActivityForm">
                    <div class="form-group mb-3">
                        <label for="name">Tên hoạt động</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="datetime">Ngày giờ</label>
                        <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="location">Địa điểm</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Mô tả</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="status">Trạng thái</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="upcoming" selected>Sắp tới</option>
                            <option value="ongoing">Đang diễn ra</option>
                            <option value="completed">Đã hoàn thành</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Đăng hoạt động</button>
                        <a href="#" class="btn btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form đăng hoạt động -->

        <!-- Danh sách các hoạt động đã tạo -->
        <div class="card mt-4" id="edit-form" style="display: none;">
            <div class="card-header">
                <h5 class="mb-0">Danh sách các hoạt động đã tạo</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tên hoạt động</th>
                            <th>Ngày giờ</th>
                            <th>Địa điểm</th>
                            <th>Trạng thái</th>
                            <th class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            // Dữ liệu mẫu, thay thế bằng dữ liệu thực tế nếu có
                            $activities = [
                                [
                                    'id' => 1,
                                    'name' => 'Hoạt động 1',
                                    'datetime' => '2023-12-31T23:59',
                                    'location' => 'Hội trường lớn',
                                    'status' => 'upcoming',
                                    'description' => 'Mô tả chi tiết về hoạt động 1...'
                                ],
                                [
                                    'id' => 2,
                                    'name' => 'Hoạt động 2',
                                    'datetime' => '2023-11-30T18:00',
                                    'location' => 'Phòng họp A',
                                    'status' => 'ongoing',
                                    'description' => 'Mô tả chi tiết về hoạt động 2...'
                                ]
                            ];
                        @endphp
                        @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity['name'] }}</td>
                                <td>{{ $activity['datetime'] }}</td>
                                <td>{{ $activity['location'] }}</td>
                                <td>{{ ucfirst($activity['status']) }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary btn-edit-activity" data-id="{{ $activity['id'] }}" data-name="{{ $activity['name'] }}" data-datetime="{{ $activity['datetime'] }}" data-location="{{ $activity['location'] }}" data-status="{{ $activity['status'] }}" data-description="{{ $activity['description'] }}">Chỉnh sửa</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /danh sách các hoạt động đã tạo -->
    </div>
    <!-- /content area -->

    <!-- Modal chỉnh sửa hoạt động -->
    <div class="modal fade" id="editActivityModal" tabindex="-1" aria-labelledby="editActivityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editActivityModalLabel">Chỉnh sửa hoạt động</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('admin.pages.admin-club.form-active')
                </div>
            </div>
        </div>
    </div>
    <!-- /modal chỉnh sửa hoạt động -->

    <script>
        document.getElementById('btn-create').addEventListener('click', function() {
            document.getElementById('create-form').style.display = 'block';
            document.getElementById('edit-form').style.display = 'none';
        });

        document.getElementById('btn-edit').addEventListener('click', function() {
            document.getElementById('create-form').style.display = 'none';
            document.getElementById('edit-form').style.display = 'block';
        });

        document.querySelectorAll('.btn-edit-activity').forEach(function(button) {
            button.addEventListener('click', function() {
                var modal = new bootstrap.Modal(document.getElementById('editActivityModal'));
                document.getElementById('edit-name').value = this.getAttribute('data-name');
                document.getElementById('edit-datetime').value = this.getAttribute('data-datetime');
                document.getElementById('edit-location').value = this.getAttribute('data-location');
                document.getElementById('edit-description').value = this.getAttribute('data-description');
                document.getElementById('edit-status').value = this.getAttribute('data-status');
                modal.show();
            });
        });
    </script>
@endsection