<!-- Modal Chi tiết -->
<div class="modal fade" id="viewClubModal-{{ $club->id }}" tabindex="-1" aria-labelledby="viewClubModalLabel-{{ $club->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewClubModalLabel-{{ $club->id }}">Chi tiết câu lạc bộ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Tên CLB:</strong> {{ $club->name }}</p>
                <p><strong>Mô tả:</strong> {{ $club->description }}</p>
                <p><strong>Ngân sách:</strong> {{ number_format($club->balance, 0, ',', '.') }} VNĐ</p>
                <p><strong>Trạng thái:</strong> {{ $club->status == 'active' ? 'Hoạt động' : 'Ngừng hoạt động' }}</p>
                <p><strong>Chủ tịch hiện tại: </strong> {{$club->president->name ?? 'Chưa có chủ tịch'}}</p>
                <form action="{{ route('admin.clubs.updatePresident', $club->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="president" class="form-label"><strong>Chọn chủ tịch mới:</strong></label>
                        <select name="president_id" id="president" class="form-select">
                            @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $club->president_id == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật Chủ tịch</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>