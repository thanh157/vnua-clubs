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
            <form action="{{ route('admin-club.information.update-images', $club->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <label for="thumbnail">Ảnh đại diện</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept=".jpg, .jpeg, .png">
                    @if($club->thumbnail)
                    <img src="{{ asset($club->thumbnail) }}" alt="Thumbnail" class="mt-3" width="150">
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="cover_image">Ảnh bìa</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image" accept=".jpg, .jpeg, .png">
                    @if($club->cover_image)
                    <img src="{{ asset($club->cover_image) }}" alt="Cover Image" class="mt-3" width="25%">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-3">Lưu</button>
            </form>
        </div>
    </div>

    <!-- Club preview -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="mb-0">Xem trước câu lạc bộ</h5>
        </div>
        <div class="card-body">
            <div class="profile-cover">
                <!-- Ảnh bìa -->
                <div class="profile-cover-img"
                    style="background-image: url('{{ $club->cover_image ?? 'http://127.0.0.1:8000/assets/client/images/mau-clb2.jpg' }}'); background-position: 20% 80%; background-size: cover; background-repeat: no-repeat; border-radius: 10px; height: 250px;">
                </div>
                <!-- Nội dung -->
                <div class="d-flex align-items-center position-relative mx-3 mb-3" style="padding-right: 20px; padding-top: 10px">

                    <!-- Avatar - ở bên trái -->
                    <div class="me-lg-3 mb-0 position-relative">
                        <a href="#">
                            <img src="{{ $club->thumbnail ?? 'http://127.0.0.1:8000/assets/client/images/mau-clb1.jpg' }}" class="img-thumbnail shadow" width="100" alt="" style="border-radius: 50%; object-fit: cover; height:100px">
                        </a>
                    </div>

                    <!-- Tên câu lạc bộ - căn giữa với avatar -->
                    <div class="text-black">
                        <h3 class="mb-0">{{ $club->name }}</h3>
                        <span class="d-block">{{ $club->category ?? 'Chưa phân loại' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Club overview -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="mb-0">Tổng quan CLB</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin-club.information.update-overview', $club->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <label for="member_limit">Số thành viên</label>
                    <input type="number" class="form-control" id="member_limit" name="member_limit" value="{{ $club->member_limit }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="award_amount">Giải thưởng</label>
                    <input type="text" class="form-control" id="award_amount" name="award_amount" value="{{ $club->award_amount }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="projects_completed">Dự án đã làm</label>
                    <input type="number" class="form-control" id="projects_completed" name="projects_completed" value="{{ $club->projects_completed }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="future_project_amount">Dự án tương lai</label>
                    <input type="number" class="form-control" id="future_project_amount" name="future_project_amount" value="{{ $club->future_project_amount }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="event_amount">Sự kiện đã tổ chức</label>
                    <input type="number" class="form-control" id="event_amount" name="event_amount" value="{{ $club->event_amount }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Lưu</button>
            </form>
        </div>
    </div>

    <!-- Club detailed description -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="mb-0">Mô tả chi tiết</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin-club.information.update-description', $club->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <label for="name">Tên câu lạc bộ</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $club->name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description">Mô tả</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{ $club->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="founded_date">Ngày tháng năm thành lập</label>
                    <input type="date" class="form-control" id="founded_date" name="founded_date" value="{{ $club->founded_date }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="category">Lĩnh vực</label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ $club->category }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address">Địa điểm hoạt động</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $club->address }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="mission">Mục đích và sứ mệnh</label>
                    <textarea class="form-control" id="mission" name="mission" rows="4" required>{{ $club->mission }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="content_type">Các nội dung sáng tạo</label>
                    <input type="text" class="form-control" id="content_type" name="content_type" value="{{ $club->content_type }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="community_purpose">Kết nối cộng đồng</label>
                    <input type="text" class="form-control" id="community_purpose" name="community_purpose" value="{{ $club->community_purpose }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="skill_improvement">Phát triển kỹ năng</label>
                    <input type="text" class="form-control" id="skill_improvement" name="skill_improvement" value="{{ $club->skill_improvement }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="vision">Tầm nhìn</label>
                    <input type="text" class="form-control" id="vision" name="vision" value="{{ $club->vision }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="core_values">Giá trị cốt lõi</label>
                    <input type="text" class="form-control" id="core_values" name="core_values" value="{{ $club->core_values }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="slogan">Khẩu hiệu</label>
                    <input type="text" class="form-control" id="slogan" name="slogan" value="{{ $club->slogan }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="activity_info">Thông tin hoạt động</label>
                    <input type="text" class="form-control" id="activity_info" name="activity_info" value="{{ $club->activity_info }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Lưu</button>
            </form>
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

    .form-group input,
    .form-group textarea {
        margin-bottom: 10px;
    }

    .table th,
    .table td {
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