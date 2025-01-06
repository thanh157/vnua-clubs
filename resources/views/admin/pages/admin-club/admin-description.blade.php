@extends('admin.layouts.masterc2')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Mô tả câu lạc bộ</span></h4>
                <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Club description -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Thêm ảnh</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="avatar">Ảnh đại diện</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" accept=".jpg, .jpeg, .png">
                        <img src="{{ asset('path/to/avatar.jpg') }}" alt="Avatar" class="mt-3" width="150">
                    </div>
                    <div class="form-group mb-3">
                        <label for="cover">Ảnh bìa</label>
                        <input type="file" class="form-control" id="cover" name="cover" accept=".jpg, .jpeg, .png">
                        <img src="{{ asset('path/to/cover.jpg') }}" alt="Cover" class="mt-3" width="100%">
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="saveImages()">Lưu</button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Tổng quan CLB</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="members">Số thành viên</label>
                        <input type="number" class="form-control" id="members" name="members" value="100" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="awards">Giải thưởng</label>
                        <input type="text" class="form-control" id="awards" name="awards" value="Giải thưởng ABC" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="years">Số năm hoạt động</label>
                        <input type="number" class="form-control" id="years" name="years" value="5" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="completed_projects">Dự án đã làm</label>
                        <input type="number" class="form-control" id="completed_projects" name="completed_projects" value="2" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="future_projects">Dự án tương lai</label>
                        <input type="number" class="form-control" id="future_projects" name="future_projects" value="2" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="events">Sự kiện đã tổ chức</label>
                        <input type="number" class="form-control" id="events" name="events" value="2" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="posts">Bài viết</label>
                        <textarea class="form-control" id="posts" name="posts" rows="4" required>Danh sách các bài viết...</textarea>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="saveOverview()">Lưu</button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Mô tả chi tiết</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="name">Tên câu lạc bộ</label>
                        <input type="text" class="form-control" id="name" name="name" value="Tên câu lạc bộ" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Mô tả</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required>Mô tả chi tiết về câu lạc bộ...</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="founded_date">Ngày tháng năm thành lập</label>
                        <input type="date" class="form-control" id="founded_date" name="founded_date" value="2020-01-01" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="field">Lĩnh vực</label>
                        <input type="text" class="form-control" id="field" name="field" value="Lĩnh vực hoạt động" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="location">Địa điểm hoạt động</label>
                        <input type="text" class="form-control" id="location" name="location" value="Địa điểm hoạt động" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="purpose">Mục đích</label>
                        <textarea class="form-control" id="purpose" name="purpose" rows="4" required>Mục đích của câu lạc bộ...</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="mission">Sứ mệnh</label>
                        <textarea class="form-control" id="mission" name="mission" rows="4" required>Sứ mệnh của câu lạc bộ...</textarea>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="saveDescription()">Lưu</button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Thông tin hoạt động</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="activity_name">Tên hoạt động</label>
                        <input type="text" class="form-control" id="activity_name" name="activity_name" value="Tên hoạt động" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="activity_description">Mô tả</label>
                        <textarea class="form-control" id="activity_description" name="activity_description" rows="4" required>Mô tả chi tiết về hoạt động...</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="activity_members">Số thành viên</label>
                        <input type="number" class="form-control" id="activity_members" name="activity_members" value="50" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="activity_time">Thời gian</label>
                        <input type="datetime-local" class="form-control" id="activity_time" name="activity_time" value="2023-12-31T23:59" required>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="saveActivity()">Lưu</button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Hình ảnh và tài liệu</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="images">Thêm hình ảnh</label>
                        <input type="file" class="form-control" id="images" name="images[]" accept=".jpg, .jpeg, .png" multiple>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Video nổi bật</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="videos">Thêm video</label>
                        <input type="file" class="form-control" id="videos" name="videos[]" accept="video/*" multiple>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <!-- Bảng lựa chọn hình ảnh và video đã đăng -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Hình ảnh và video đã đăng</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Loại</th>
                            <th>URL</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu mẫu -->
                        <tr>
                            <td>Hình ảnh</td>
                            <td><a href="{{ asset('path/to/image1.jpg') }}" target="_blank">Xem hình ảnh</a></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-danger">Xóa</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Video</td>
                            <td><a href="{{ asset('path/to/video1.mp4') }}" target="_blank">Xem video</a></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-danger">Xóa</button>
                            </td>
                        </tr>
                        <!-- Thêm các dòng khác tương tự -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /Bảng lựa chọn hình ảnh và video đã đăng -->
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
    .img-thumbnail {
        margin: 5px;
    }
</style>
@endsection