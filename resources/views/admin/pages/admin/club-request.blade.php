@extends('admin.layouts.master')

@section('content')
<!-- Page header -->
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Câu lạc bộ - <span class="fw-normal">Yêu cầu đăng ký CLB</span>
            </h4>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tìm kiếm đơn xin thành lập CLB</h5>
            <div class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" id="search-activity" placeholder="Tìm kiếm đơn thành lập CLB">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Scrollable datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Danh sách yêu cầu đăng ký CLB</h5>
        </div>

        <table class="table datatable-scroll-y" width="100%">
            <thead>
                <tr>
                    <th>Tên CLB</th>
                    <th>Người đăng ký</th>
                    <th>Email</th>
                    <th>Mô tả</th>
                    <th>Ngày đăng ký</th>
                    <th>Trạng thái</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clubRequests as $request)
                <tr>
                    <td>{{ $request->club_name }}</td>
                    <td><a href="#">{{ $request->user->name }}</a></td>
                    <td>{{ $request->user->email }}</td>
                    <td>{{ $request->description }}</td>
                    <td>{{ $request->created_at->format('Y-m-d') }}</td>
                    <td>
                        <span class="badge {{ $request->status == 'pending' ? 'bg-info bg-opacity-10 text-info' : ($request->status == 'approved' ? 'bg-success bg-opacity-10 text-success' : 'bg-danger bg-opacity-10 text-danger') }}">
                            {{ $request->status == 'pending' ? 'Chờ duyệt' : ($request->status == 'approved' ? 'Đã duyệt' : 'Từ chối') }}
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    @if($request->status == 'pending')
                                    <a href="#" class="dropdown-item text-success" data-bs-toggle="modal" data-bs-target="#approveModal-{{ $request->id }}">
                                        <i class="ph-check-circle me-2"></i>
                                        Duyệt
                                    </a>
                                    <a href="#" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#rejectModal-{{ $request->id }}">
                                        <i class="ph-x-circle me-2"></i>
                                        Từ chối
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- Modal Approve -->
                <div class="modal fade" id="approveModal-{{ $request->id }}" tabindex="-1" aria-labelledby="approveModalLabel-{{ $request->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="approveModalLabel-{{ $request->id }}">Duyệt yêu cầu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn muốn duyệt yêu cầu này không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <form action="{{ route('admin.club-requests.approve', $request->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">Duyệt</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Reject -->
                <div class="modal fade" id="rejectModal-{{ $request->id }}" tabindex="-1" aria-labelledby="rejectModalLabel-{{ $request->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rejectModalLabel-{{ $request->id }}">Từ chối yêu cầu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn muốn từ chối yêu cầu này không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <form action="{{ route('admin.club-requests.reject', $request->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger">Từ chối</button>
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

<!-- Approve Modal -->
<div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-success">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="approveModalLabel">Duyệt Yêu Cầu</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc chắn muốn <strong class="text-success">DUYỆT</strong> yêu cầu này không?</p>
                <textarea class="form-control" rows="3" placeholder="Nhập ghi chú (tùy chọn)"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-success">Xác nhận</button>
            </div>
        </div>
    </div>
</div>

<!-- Reject Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="rejectModalLabel">Từ Chối Yêu Cầu</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc chắn muốn <strong class="text-danger">TỪ CHỐI</strong> yêu cầu này không?</p>
                <textarea class="form-control" rows="3" placeholder="Nhập lý do từ chối"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
@endsection