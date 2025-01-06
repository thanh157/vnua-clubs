
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Chỉnh sửa thông báo</span></h4>
            <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Edit Notification Form -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Chỉnh sửa thông báo</h5>
        </div>
        <div class="card-body">
            <form id="edit-notification-form">
                <div class="form-group mb-3">
                    <label for="edit_notification_date">Ngày đăng</label>
                    <input type="date" class="form-control" id="edit_notification_date" name="edit_notification_date" required>
                </div>
                <div class="form-group mb-3">
                    <label for="edit_notification_description">Mô tả</label>
                    <textarea class="form-control" id="edit_notification_description" name="edit_notification_description" rows="4" required></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    <button type="button" class="btn btn-secondary" id="cancel-edit">Hủy</button>
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