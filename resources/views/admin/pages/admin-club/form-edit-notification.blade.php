<!-- Content area -->
<div class="content">
    <!-- Edit Notification Form -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chỉnh sửa thông báo</h5>
        </div>
        <div class="card-body">
            <form id="notification-form" action="{{ route('admin.admin-notifications.update',$item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$item->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="message">Mô tả</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" required>{{ old('message',$item->message) }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('styles')
<style>
    .form-group label {
        font-weight: bold;
    }
    .form-group input, .form-group textarea {
        margin-bottom: 10px;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hủy chỉnh sửa
        document.getElementById('cancel-edit').addEventListener('click', function() {
            window.history.back();
        });
    });
</script>
@endsection