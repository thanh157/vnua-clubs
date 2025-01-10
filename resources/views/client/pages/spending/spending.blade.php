@extends('client.layouts.master')

@section('title')
    Chi tiêu cá nhân trong câu lạc bộ
@endsection

@section('content')
<div class="container" style="margin-top: 100px" >
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="mb-0">Danh sách các khoản chi tiêu</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tên khoản chi</th>
                        <th>Danh mục</th>
                        <th>Số tiền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($spendings as $spending)
                    <tr>
                        <td>{{ $spending->expense_name }}</td>
                        <td>{{ $spending->revenue_name }}</td>
                        <td>{{ $spending->expense_amount }}</td>
                        <td>
                            <form action="{{ route('club-president-spending.destroy', $spending->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection