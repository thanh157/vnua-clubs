@extends('admin.layouts.master')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Thông báo - <span class="fw-normal">Yêu cầu thông báo</span>
                </h4>

                <a href="#page_header"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tìm kiếm thông báo</h5>
                <div class="d-flex">
                    <form method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Tìm kiếm đơn thành lập CLB">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </form>
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
                <h5 class="mb-0">Danh sách thông báo</h5>
            </div>

            <table class="table datatable-scroll-y" width="100%">
                <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Câu lạc bộ</th>
                        <th>Ngày đăng ký</th>
                        <th>Trạng thái</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifications as $item)
                        <tr id="notification-{{ $item->id }}">
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->message }}</td>
                            <td>{{ $item->club->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                @if ($item->status == 'pending')
                                    <span class="badge bg-warning">Chờ duyệt</span>
                                @elseif($item->status == 'approved')
                                    <span class="badge bg-success">Đã duyệt</span>
                                @else
                                    <span class="badge bg-danger">Từ chối</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hành động
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#approveModal-{{ $item->id }}">
                                                <i class="fas fa-check"></i> Xác nhận
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#rejectModal-{{ $item->id }}">
                                                <i class="fas fa-times"></i> Từ chối
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <!-- Approve Modal -->
                            <div class="modal fade" id="approveModal-{{ $item->id }}" tabindex="-1"
                                aria-labelledby="approveModalLabel-{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="approveModalLabel-{{ $item->id }}">Xác nhận duyệt</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn duyệt thông báo này?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('admin.notifications.approved', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success">Xác nhận</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reject Modal -->
                            <div class="modal fade" id="rejectModal-{{ $item->id }}" tabindex="-1"
                                aria-labelledby="rejectModalLabel-{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="rejectModalLabel-{{ $item->id }}">Xác nhận từ chối?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn từ chối thông báo này?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('admin.notifications.rejected', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger">Từ chối</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">hủy</button>
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
@endsection
