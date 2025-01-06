@extends('admin.layouts.master')

@section('content')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Danh sách câu lạc bộ</span></h4>
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
            <h5 class="mb-0">Tìm kiếm câu lạc bộ</h5>
            <div class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" id="search-club" placeholder="Tìm kiếm câu lạc bộ">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Club List -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Danh sách câu lạc bộ</h5>
        </div>

        <table class="table datatable-scroll-y" width="100%">
            <thead>
                <tr>
                    <th>Tên CLB</th>
                    <th>Chủ tịch</th>
                    {{-- <th>Mô tả</th> --}}
                    <th>Ngân sách</th>
                    <th>Trạng thái</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody id="club-list">
                @foreach($clubs as $club)
                <tr>
                    <td>{{ $club->name }}</td>
                    <td><a href="#">{{ $club->president->name ?? '' }}</a></td>
                    {{-- <td>{{ $club->description }}</td> --}}
                    <td>{{ number_format($club->balance, 0, ',', '.') }} VNĐ</td>
                    <td>
                    <span class="badge {{ $club->status ? 'bg-success text-success bg-opacity-10' : 'bg-danger text-danger bg-opacity-10' }}">
                            {{ $club->status ? 'Hoạt động' : 'Ngừng hoạt động' }}
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewClubModal-{{ $club->id }}">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                    <form action="{{ route('admin.clubs.toggleStatus', $club->id) }}" method="POST" class="dropdown-item">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                            <i class="ph-check-circle me-2"></i>
                                            {{ $club->status ? 'Deactive' : 'Active' }}
                                        </button>
                                    </form>
                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="ph-x-circle me-2"></i>
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                @include('admin.pages.admin.club-modal', ['club' => $club, 'users' => $users])
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /Club List -->
</div>
<!-- /content area -->

<!-- Modal -->
<div class="modal fade" id="viewFormModal" tabindex="-1" aria-labelledby="viewFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewFormModalLabel">Chi tiết câu lạc bộ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Nội dung chi tiết câu lạc bộ -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->
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
        // Tìm kiếm câu lạc bộ
        document.getElementById('search-club').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var rows = document.querySelectorAll('#club-list tr');
            rows.forEach(function(row) {
                var clubName = row.cells[0].textContent.toLowerCase();
                if (clubName.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection