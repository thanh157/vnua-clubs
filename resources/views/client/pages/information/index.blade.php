@extends('client.layouts.master')

@section('title')
    Thông tin người dùng
@endsection

@section('content')

<div class="containers">
    <div class="filter-panel">
        <h2>Lọc</h2>
        <ul>
            <li>
                <label><input type="radio" name="data-filter" value="all" checked> Tất cả</label>
            </li>
            <li>
                <label><input type="radio" name="data-filter" value="club-requests"> Yêu cầu CLB</label>
            </li>
            <li>
                <label><input type="radio" name="data-filter" value="member-requests"> Yêu cầu thành viên</label>
            </li>
            <li>
                <label><input type="radio" name="data-filter" value="memberships"> Thành viên CLB</label>
            </li>
        </ul>
    </div>

    <div class="data-panel">
        <h2>Dữ liệu</h2>
        <div id="data-container"></div>

        <!-- Điều hướng phân trang -->
        <div class="pagination">
            <button id="prev-btn" disabled>Trước</button>
            <button id="next-btn">Tiếp</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const clubRequests = @json($clubRequests);
    const memberRequests = @json($memberRequests);
    const memberships = @json($memberships);

    const itemsPerPage = 6;
    let currentPage = 1;

    function formatDate(dateString) {
        const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
        return new Date(dateString).toLocaleDateString('vi-VN', options);
    }

    function renderData(data) {
        const container = document.getElementById('data-container');
        container.innerHTML = '';

        const start = (currentPage - 1) * itemsPerPage;
        const end = Math.min(start + itemsPerPage, data.length);

        for (let i = start; i < end; i++) {
            const item = data[i];
            const isNew = new Date(item.created_at).toDateString() === new Date().toDateString();

            const dataItem = document.createElement('div');
            dataItem.className = `data-item ${isNew ? 'new' : 'old'}`;
            dataItem.dataset.date = item.created_at;
            dataItem.innerHTML = `
                <div class="data-content">
                    <h3>${item.club ? item.club.name : item.club_name}</h3>
                    <time>Ngày đăng: ${formatDate(item.created_at)}</time>
                    <p>${item.message || item.description || item.purpose}</p>
                </div>
                <div class="data-status">${isNew ? 'Mới' : 'Cũ'}</div>
            `;
            container.appendChild(dataItem);
        }

        document.getElementById('prev-btn').disabled = currentPage === 1;
        document.getElementById('next-btn').disabled = end >= data.length;
    }

    function applyFilter() {
        const value = document.querySelector('input[name="data-filter"]:checked').value;
        let data = [];
        if (value === 'club-requests') data = clubRequests;
        else if (value === 'member-requests') data = memberRequests;
        else if (value === 'memberships') data = memberships;
        else data = [...clubRequests, ...memberRequests, ...memberships];

        renderData(data);
    }

    document.querySelectorAll('input[name="data-filter"]').forEach(input => {
        input.addEventListener('change', () => {
            currentPage = 1;
            applyFilter();
        });
    });

    document.getElementById('prev-btn').addEventListener('click', () => {
        if (currentPage > 1) currentPage--;
        applyFilter();
    });

    document.getElementById('next-btn').addEventListener('click', () => {
        if (currentPage * itemsPerPage < clubRequests.length + memberRequests.length + memberships.length) currentPage++;
        applyFilter();
    });

    applyFilter();
});
</script>

@endsection