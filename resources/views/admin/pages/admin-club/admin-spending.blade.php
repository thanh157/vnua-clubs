@extends('admin.layouts.masterc2')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Quản lý chi tiêu</span></h4>
                <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Club Budget -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Tổng số ngân sách của câu lạc bộ</h5>
            </div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="total_budget">Tổng ngân sách</label>
                    <input type="number" class="form-control" id="total_budget" name="total_budget" value="1000000" readonly>
                </div>
            </div>
        </div>

        <!-- Revenue from Members -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Các khoản thu từ thành viên</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="revenue_name">Tên khoản thu</label>
                        <input type="text" class="form-control" id="revenue_name" name="revenue_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="revenue_amount">Số tiền</label>
                        <input type="number" class="form-control" id="revenue_amount" name="revenue_amount" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="revenue_date">Ngày thu</label>
                        <input type="date" class="form-control" id="revenue_date" name="revenue_date" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="revenue_description">Mô tả</label>
                        <textarea class="form-control" id="revenue_description" name="revenue_description" rows="4" required></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
                <hr>
                <h6>Danh sách các khoản thu</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tên khoản thu</th>
                            <th>Số tiền</th>
                            <th>Ngày thu</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu mẫu -->
                        <tr>
                            <td>Quỹ tháng 10</td>
                            <td>200000</td>
                            <td>2023-10-01</td>
                            <td>Quỹ tháng 10 từ thành viên</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Chỉnh sửa</button>
                                <button class="btn btn-sm btn-danger">Xóa</button>
                            </td>
                        </tr>
                        <!-- Thêm các dòng dữ liệu khác tại đây -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Spending Management -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Các khoản chi tiêu</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="expense_name">Tên khoản chi</label>
                        <input type="text" class="form-control" id="expense_name" name="expense_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="expense_amount">Số tiền</label>
                        <input type="number" class="form-control" id="expense_amount" name="expense_amount" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="expense_date">Ngày chi</label>
                        <input type="date" class="form-control" id="expense_date" name="expense_date" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="expense_description">Mô tả</label>
                        <textarea class="form-control" id="expense_description" name="expense_description" rows="4" required></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
                <hr>
                <h6>Danh sách các khoản chi</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tên khoản chi</th>
                            <th>Số tiền</th>
                            <th>Ngày chi</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu mẫu -->
                        <tr>
                            <td>Chi phí sự kiện</td>
                            <td>500000</td>
                            <td>2023-10-01</td>
                            <td>Chi phí tổ chức sự kiện ABC</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Chỉnh sửa</button>
                                <button class="btn btn-sm btn-danger">Xóa</button>
                            </td>
                        </tr>
                        <!-- Thêm các dòng dữ liệu khác tại đây -->
                    </tbody>
                </table>
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