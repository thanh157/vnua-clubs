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
            <h5 class="mb-0">Tìm kiếm thành viên</h5>
            <div class="d-flex">
                <form action="{{ route('admin-club.members') }}" method="GET" class="d-flex w-200">
                    <div class="input-group flex-grow-1">
                        <input type="text" name="keySearch" class="form-control" id="search-application" placeholder="Tìm kiếm thành viên" value="{{ request('keySearch') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="input-group ms-3">
                        <select name="roleFilter" class="form-select" onchange="this.form.submit()">
                            <option value="all" {{ request('roleFilter') == 'all' ? 'selected' : '' }}>Tất cả</option>
                            <option value="management" {{ request('roleFilter') == 'management' ? 'selected' : '' }}>Ban quản trị</option>
                            <option value="member" {{ request('roleFilter') == 'member' ? 'selected' : '' }}>Thành viên</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scrollable datatable -->
    <div class="card">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên thành viên</th>
                    <th>Ngày tham gia</th>
                    <th>Vai trò</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>
                        <img src="{{ $member->user->avatar_url ?? asset('assets/client/images/logo-vnua.jpg') }}" alt="Avatar" class="rounded-circle" width="40" height="40">
                    </td>
                    <td>{{ $member->user->name }}</td>
                    <td>{{ $member->created_at ? $member->created_at->format('Y-m-d') : 'N/A' }}</td>
                    <td>
                        @php
                        $role = \App\Enums\RoleClub::from($member->role);
                        @endphp
                        <span class="badge {{ $member->role == \App\Enums\RoleClub::PRESIDENT->value || $member->role == \App\Enums\RoleClub::VICE_PRESIDENT->value? 'bg-primary bg-opacity-10 text-primary' : 'bg-success bg-opacity-10 text-success' }}">
                            {{ $role->name() }}
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewMemberModal-{{ $member->id }}">
                                        <i class="ph-eye me-2"></i>
                                        Xem chi tiết
                                    </a>
                                    <a href="#" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#deleteMemberModal-{{ $member->id }}">
                                        <i class="ph-trash me-2"></i>
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- Modal View Member -->
                <div class="modal fade" id="viewMemberModal-{{ $member->id }}" tabindex="-1" aria-labelledby="viewMemberModalLabel-{{ $member->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewMemberModalLabel-{{ $member->id }}">Chi tiết thành viên</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Tên: {{ $member->name }}</p>
                                <p>Email: {{ $member->email }}</p>
                                <p>Vai trò: {{ $member->role == 'admin' ? 'Quản trị viên' : 'Thành viên' }}</p>
                                <p>Ngày tham gia: {{ $member->created_at ? $member->created_at->format('Y-m-d') : 'N/A' }}</p>
                                <form action="{{ route('admin-club.members.updateRole', $member->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Cập nhập Vai trò</label>
                                        <select class="form-select" id="role" name="role">
                                            @foreach($roles as $role)
                                            <option value="{{ $role->value }}" {{ $member->role == $role->value ? 'selected' : '' }}>
                                                {{ $role->name() }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Delete Member -->
                <div class="modal fade" id="deleteMemberModal-{{ $member->id }}" tabindex="-1" aria-labelledby="deleteMemberModalLabel-{{ $member->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteMemberModalLabel-{{ $member->id }}">Xóa thành viên</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa thành viên này không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <form action="{{ route('admin-club.members.delete', $member->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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

<!-- Modal Thay đổi chức vụ -->
<div class="modal fade" id="editPositionModal" tabindex="-1" aria-labelledby="editPositionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPositionModalLabel">Thay đổi chức vụ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include('admin.pages.admin-club.form-change')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('editPositionForm').submit();">Lưu thay đổi</button>
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