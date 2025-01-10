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
                    <input type="number" class="form-control" id="total_budget" name="total_budget" value="1000000"
                        readonly>
                </div>
            </div>
        </div>

        <!-- Revenue from Members -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Nhật ký thu chi</h5>
            </div>
            <button type="button" class="btn btn-primary btn-limited" data-bs-toggle="modal"
                data-bs-target="#createSpendingModal">
                Thêm khoản chi tiêu
            </button>
            <div class="card-body">
                <h6>Danh sách các khoản thu-chi</h6>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Loại</th>
                            <th>Tên khoản chi</th>
                            <th>Danh mục</th>
                            <th>Số tiền</th>
                            <th>Ngày</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spendings as $spending)
                            <tr>
                                <td>{{ $spending->type }}</td>
                                <td>{{ $spending->expense_name }}</td>
                                <td>{{ $spending->category }}</td>
                                <td>{{ $spending->amount }}</td>
                                <td>{{ $spending->date }}</td>
                                <td>{{ $spending->description }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editSpendingModal-{{ $spending->id }}">Sửa</button>
                                    <form action="{{ route('club-president-spending.destroy', $spending->id) }}"
                                        method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal Sửa Chi Tiêu -->
                            <div class="modal fade" id="editSpendingModal-{{ $spending->id }}" tabindex="-1"
                                aria-labelledby="editSpendingModalLabel-{{ $spending->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editSpendingModalLabel-{{ $spending->id }}">Chỉnh
                                                sửa khoản chi tiêu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin-club.spendings.update', $spending->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group mb-3">
                                                    <label for="expense_name">Tên khoản thu-chi</label>
                                                    <input type="text" class="form-control" id="expense_name"
                                                        name="expense_name" value="{{ $spending->expense_name }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="type">Loại</label>
                                                    <select class="form-control" id="type" name="type" required>
                                                        <option value="income"
                                                            {{ $spending->type == 'income' ? 'selected' : '' }}>Thu
                                                        </option>
                                                        <option value="expense"
                                                            {{ $spending->type == 'expense' ? 'selected' : '' }}>Chi
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="amount">Số tiền</label>
                                                    <input type="number" class="form-control" id="amount" name="amount"
                                                        value="{{ $spending->amount }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="category">Danh mục</label>
                                                    <select class="form-control" id="category" name="category" required>
                                                        <option value="MemberFee"
                                                            {{ $spending->category == 'MemberFee' ? 'selected' : '' }}>Thu
                                                            quỹ</option>
                                                        <option value="Activity"
                                                            {{ $spending->category == 'Activity' ? 'selected' : '' }}>Chi
                                                            hoạt động</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="date">Ngày</label>
                                                    <input type="date" class="form-control" id="date" name="date"
                                                        value="{{ $spending->date }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="description">Mô tả</label>
                                                    <textarea class="form-control" id="description" name="description">{{ $spending->description }}</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal Tạo Chi Tiêu -->
    <div class="modal fade" id="createSpendingModal" tabindex="-1" aria-labelledby="createSpendingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createSpendingModalLabel">Thêm khoản chi tiêu mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-club.spendings.create') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="expense_name">Tên khoản chi</label>
                            <input type="text" class="form-control" id="expense_name" name="expense_name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="type">Loại</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="" disabled selected>Chọn loại</option>
                                <option value="income">Thu</option>
                                <option value="expense">Chi</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="amount">Số tiền</label>
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Danh mục</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="" disabled selected>Chọn danh mục</option>
                                <option value="MemberFee">Thu quỹ</option>
                                <option value="Activity">Chi hoạt động</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="date">Ngày</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Mô tả</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
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
    </style>
@endsection
