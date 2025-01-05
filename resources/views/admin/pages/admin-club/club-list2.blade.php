@extends('admin.layouts.masterc2')

@section('content')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Danh sách đăng ký tham gia câu lạc bộ</span></h4>
            <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Scrollable datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Danh sách các đơn cần duyệt</h5>
        </div>

        <table class="table datatable-scroll-y" width="100%">
            <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Mã SV</th>
                    <th>Lớp</th>
                    <th>SDT</th>
                    <th>Giới tính</th>
                    <th>Mục đích tham gia</th>
                    <th>Trạng thái</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($memberRequests as $request)
                <tr>
                    <td><a href="#">{{ $request->full_name }}</a></td>
                    <td>{{ $request->student_id }}</td>
                    <td>{{ $request->class_name }}</td>
                    <td>{{ $request->phone }}</td>
                    <td>{{ $request->gender }}</td>
                    <td>{{ $request->purpose }}</td>
                    <td>
                        <span class="badge {{ $request->status->value === 'pending' ? 'bg-warning' : ($request->status->value === 'approved' ? 'bg-success' : 'bg-danger') }}">
                            {{ ucfirst($request->status->value) }}
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewFormModal-{{ $request->id }}">
                                        <i class="ph-eye me-2"></i>
                                        Chi tiết
                                    </a>
                                    <form action="{{ route('admin.member-requests.approve', $request->id) }}" method="POST" class="dropdown-item">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                            <i class="ph-check-circle me-2"></i>
                                            Phê duyệt
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.member-requests.reject', $request->id) }}" method="POST" class="dropdown-item">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-danger">
                                            <i class="ph-x-circle me-2"></i>
                                            Từ chối
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.member-requests.delete', $request->id) }}" method="POST" class="dropdown-item">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-danger">
                                            <i class="ph-x-circle me-2"></i>
                                            Xóa
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- Modal Chi tiết -->
                <div class="modal fade" id="viewFormModal-{{ $request->id }}" tabindex="-1" aria-labelledby="viewFormModalLabel-{{ $request->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewFormModalLabel-{{ $request->id }}">Chi tiết yêu cầu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Họ và tên:</strong> {{ $request->full_name }}</p>
                                <p><strong>Mã SV:</strong> {{ $request->student_id }}</p>
                                <p><strong>Lớp:</strong> {{ $request->class_name }}</p>
                                <p><strong>SDT:</strong> {{ $request->phone }}</p>
                                <p><strong>Giới tính:</strong> {{ $request->gender }}</p>
                                <p><strong>Mục đích tham gia:</strong> {{ $request->purpose }}</p>
                                <p><strong>Trạng thái:</strong> {{ ucfirst($request->status->value) }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <form action="{{ route('admin.member-requests.approve', $request->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-primary">Phê duyệt</button>
                                </form>
                                <form action="{{ route('admin.member-requests.reject', $request->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger">Từ chối</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Thêm các dòng khác tương tự -->
            </tbody>
        </table>
    </div>
    <!-- /scrollable datatable -->
</div>
<!-- /content area -->

<!-- Modal -->
<!-- <div class="modal fade" id="viewFormModal-1" tabindex="-1" aria-labelledby="viewFormModalLabel" aria-hidden="true">
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
</div> -->
@endsection