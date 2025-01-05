<!-- Form chỉnh sửa hoạt động -->
<form id="editActivityForm">
    <div class="form-group mb-3">
        <label for="edit-name">Tên hoạt động</label>
        <input type="text" class="form-control" id="edit-name" name="name" required>
    </div>
    <div class="form-group mb-3">
        <label for="edit-datetime">Ngày giờ</label>
        <input type="datetime-local" class="form-control" id="edit-datetime" name="datetime" required>
    </div>
    <div class="form-group mb-3">
        <label for="edit-location">Địa điểm</label>
        <input type="text" class="form-control" id="edit-location" name="location" required>
    </div>
    <div class="form-group mb-3">
        <label for="edit-description">Mô tả</label>
        <textarea class="form-control" id="edit-description" name="description" rows="4" required></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="edit-status">Trạng thái</label>
        <select class="form-control" id="edit-status" name="status" required>
            <option value="upcoming">Sắp tới</option>
            <option value="ongoing">Đang diễn ra</option>
            <option value="completed">Đã hoàn thành</option>
        </select>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
    </div>
</form>