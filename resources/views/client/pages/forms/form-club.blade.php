@extends('client.layouts.master')

@section('title')
    Đăng kí thành lập câu lạc bộ
@endsection

@section('content')

<div class="container" style="max-width: 800px; margin-top: 50px;">
    <div class="cardst shadow-lg" style="padding: 30px; border-radius: 10px; background-color: #ffffff;">
        <div class="card-header text-center" style="color: #000; ont-weight: bold;">
            <h4>Đăng Ký Thành Lập Câu Lạc Bộ</h4>
        </div>
        <form action="{{ route('club-requests.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Tên CLB -->
            <div class="mb-3 mt-2">
                <label for="club_name" class="form-label" style="font-weight: bold;">Tên Câu Lạc Bộ</label>
                <input type="text" class="form-control" id="club_name" name="club_name" placeholder="Nhập tên câu lạc bộ" required style="border-radius: 5px;">
            </div>

            <!-- Mô Tả -->
            <div class="mb-3">
                <label for="description" class="form-label" style="font-weight: bold;">Mô Tả Câu Lạc Bộ</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Mô tả về câu lạc bộ" required style="border-radius: 5px;"></textarea>
            </div>

            <!-- Lĩnh vực hoạt động -->
            <div class="mb-3">
                <label for="category" class="form-label" style="font-weight: bold;">Lĩnh Vực Hoạt Động</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Lĩnh vực hoạt động của CLB" required style="border-radius: 5px;">
            </div>

            <!-- Thời gian hoạt động -->
            <div class="mb-3">
                <label for="activity_time" class="form-label" style="font-weight: bold;">Thời Gian Hoạt Động</label>
                <input type="text" class="form-control" id="activity_time" name="activity_time" placeholder="Nhập thời gian hoạt động của CLB" required style="border-radius: 5px;">
            </div>

            <!-- Logo CLB -->
            <div class="mb-3">
                <label for="logo" class="form-label" style="font-weight: bold;">Logo Câu Lạc Bộ</label>
                <input type="file" class="form-control" id="logo" name="logo" style="border-radius: 5px;">
            </div>

            <!-- Submit -->
            <div class="text-center" style="margin-top: 20px;">
                <button type="submit" class="btn btn-warning rounded-pill px-4 py-2" style="background-color: #f58646; border-color: #ffb645;">
                    Đăng Ký Thành Lập
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .btn-warning:hover {
        background-color: #f0ad4e !important;
        border-color: #f39c12 !important;
    }
</style>

@endsection