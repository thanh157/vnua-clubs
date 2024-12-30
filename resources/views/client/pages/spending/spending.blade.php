@extends('client.layouts.master')

@section('title')
    Chi tiêu cá nhân trong câu lạc bộ
@endsection

@section('content')

<div class="spending mt-5 mb-5 px-5">
    <div class="mt-4 mb-4 text-center">
        <h3 class="fs-4 text-dark">Quản Lý Chi Tiêu Câu Lạc Bộ</h3>
    </div>
    <section id="finance-summary">
        <h2 class="fs-5 text-dark">Tổng Quan Tài Chính</h2>
        <div id="summary-box" class="d-flex gap-3 justify-content-between">
            <div class="summary-item flex-fill bg-light p-3 rounded shadow text-center">
                <h3 class="fs-6 text-muted">Tổng Số Tiền Đã Nộp</h3>
                <p class="fs-5 fw-bold text-primary">500,000 VND</p>
            </div>
            <div class="summary-item flex-fill bg-light p-3 rounded shadow text-center">
                <h3 class="fs-6 text-muted">Số Tiền Còn Nợ</h3>
                <p class="fs-5 fw-bold text-primary">200,000 VND</p>
            </div>
            <div class="summary-item flex-fill bg-light p-3 rounded shadow text-center">
                <h3 class="fs-6 text-muted">Số Tiền Nộp Cố Định Hàng Tháng</h3>
                <p class="fs-5 fw-bold text-primary">100,000 VND</p>
            </div>
        </div>
    </section>

    <section id="payment-details">
        <h2 class="fs-5 text-dark">Chi Tiết Nộp Tiền</h2>
        <table id="payment-table" class="table table-bordered table-striped text-center">
            <thead class="table-primary">
                <tr>
                    <th class="p-3">Thời Gian Nộp</th>
                    <th class="p-3">Mục Đích</th>
                    <th class="p-3">Hoạt Động</th>
                    <th class="p-3">Số Tiền</th>
                    <th class="p-3">Phương Thức Nộp</th>
                    <th class="p-3">Tài Khoản (Nếu Chuyển Khoản)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3">2024-12-20</td>
                    <td class="p-3">Mua đồ thể thao</td>
                    <td class="p-3">Hoạt động thể thao</td>
                    <td class="p-3">200,000 VND</td>
                    <td class="p-3">Tiền mặt</td>
                    <td class="p-3">-</td>
                </tr>
                <tr>
                    <td class="p-3">2024-12-22</td>
                    <td class="p-3">Tổ chức sự kiện</td>
                    <td class="p-3">Hội thảo</td>
                    <td class="p-3">300,000 VND</td>
                    <td class="p-3">Chuyển khoản</td>
                    <td class="p-3">123456789</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="next-payment">
        <h2 class="fs-5 text-dark">Dự Kiến Tháng Tới</h2>
        <div id="next-payment-box" class="fs-6 text-dark">
            <p><strong>Dự kiến số tiền nộp tháng tới: </strong>100,000 VND</p>
            <p><strong>Mục đích nộp tháng tới: </strong>Hoạt động thể thao</p>
        </div>
    </section>

    <!-- Nút quay lại trang chủ -->
    <div class="text-center mt-4">
        <a href="{{ route('client.home')}}" class="btn btn-primary px-4 py-2 fs-6 text-white return-btn">
            Quay Lại Trang Chủ
        </a>
    </div>
</div>

@endsection