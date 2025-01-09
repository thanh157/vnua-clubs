<!-- Form hoạt động -->
<form id="{{ $formId }}">
    @csrf
    <div class="form-group mb-3">
        <label for="{{ $prefix }}-name">Tên hoạt động</label>
        <input type="text" class="form-control" id="{{ $prefix }}-name" name="name" required>
    </div>
    <div class="form-group mb-3">
        <label for="{{ $prefix }}-start_date">Thời gian bắt đầu</label>
        <input type="datetime-local" class="form-control" id="{{ $prefix }}-start_date" name="start_date" required>
    </div>
    <div class="form-group mb-3">
        <label for="{{ $prefix }}-end_date">Thời gian kết thúc</label>
        <input type="datetime-local" class="form-control" id="{{ $prefix }}-end_date" name="end_date" required>
    </div>
    <div class="form-group mb-3">
        <label for="{{ $prefix }}-location">Ghi chú về thời gian</label>
        <input type="text" class="form-control" id="{{ $prefix }}-location" name="time_note" required>
    </div>
    <div class="form-group mb-3">
        <label for="{{ $prefix }}-location">Địa điểm</label>
        <input type="text" class="form-control" id="{{ $prefix }}-location" name="location" required>
    </div>
    <div class="form-group mb-3">
        <label for="{{ $prefix }}-description">Mô tả</label>
        <textarea class="form-control" id="{{ $prefix }}-description" name="description" rows="4" required></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="{{ $prefix }}-status">Trạng thái</label>
        <select class="form-control" id="{{ $prefix }}-status" name="status" required>
            @foreach(App\Enums\StatusActivity::cases() as $status)
            <option value="{{ $status->value }}">{{ $status->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
    </div>
</form>