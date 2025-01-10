@extends('client.layouts.master')

@section('title')
    Hoạt động gần đây
@endsection

@section('content')

<div class="containers">
    <div class="filter-panel">
        <h2>Lọc</h2>
        <ul>
            <li>
                <label><input type="radio" name="data-filter" value="all" checked> Tất cả thông báo</label>
            </li>
            <li>
                <label><input type="radio" name="data-filter" value="newest"> Thông báo mới</label>
            </li>
            <li>
                <label><input type="radio" name="data-filter" value="oldest"> Thông báo cũ</label>
            </li>
            @auth
            <li>
                <label><input type="radio" name="data-filter" value="club-requests"> Đăng kí lập CLB</label>
            </li>
            <li>
                <label><input type="radio" name="data-filter" value="member-requests"> Trạng thái tham gia CLB</label>
            </li>
            <li>
                <label><input type="radio" name="data-filter" value="memberships"> CLB đang tham gia</label>
            </li>
            @endauth
        </ul>
    </div>

    <div class="notification-panel">
        <h2>Thông báo</h2>
        <div id="notification-container"></div>

        <!-- Điều hướng phân trang -->
        <div class="pagination">
            <button id="prev-btn" disabled>Trước</button>
            <button id="next-btn">Tiếp</button>
        </div>
    </div>
</div>

<style>
    .status-pending {
        background-color: #ffc107; /* Yellow */
        color: #fff;
        padding: 5px;
        border-radius: 5px;
    }
    .status-approved {
        background-color: #28a745; /* Green */
        color: #fff;
        padding: 5px;
        border-radius: 5px;
    }
    .status-rejected {
        background-color: #dc3545; /* Red */
        color: #fff;
        padding: 5px;
        border-radius: 5px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Danh sách thông báo từ server
    const notifications = @json($notifications);
    @auth
    const clubRequests = @json($clubRequests);
    const memberRequests = @json($memberRequests);
    const memberships = @json($memberships);
    @endauth

    const itemsPerPage = 6;
    let currentPage = 1;

    function formatDate(dateString) {
        const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
        return new Date(dateString).toLocaleDateString('vi-VN', options);
    }

    function renderNotifications(data, type) {
        const container = document.getElementById('notification-container');
        container.innerHTML = '';

        const start = (currentPage - 1) * itemsPerPage;
        const end = Math.min(start + itemsPerPage, data.length);

        for (let i = start; i < end; i++) {
            const item = data[i];
            let title = '';
            let date = '';
            let message = '';
            let status = '';
            let statusClass = '';

            if (type === 'notifications') {
                title = item.club.name;
                date = item.created_at;
                message = item.message;
                const isNew = new Date(date).toDateString() === new Date().toDateString();
                status = isNew ? 'Mới' : 'Cũ';
            } else if (type === 'club-requests') {
                title = item.club_name;
                date = item.created_at;
                message = item.description;
                status = item.status === 'pending' ? 'Chưa duyệt' : item.status === 'approved' ? 'Đã duyệt' : 'Từ chối';
                statusClass = item.status === 'pending' ? 'status-pending' : item.status === 'approved' ? 'status-approved' : 'status-rejected';
            } else if (type === 'member-requests') {
                title = item.club.name;
                date = item.created_at;
                message = item.purpose;
                status = item.status === 'pending' ? 'Chưa duyệt' : item.status === 'approved' ? 'Đã duyệt' : 'Từ chối';
                statusClass = item.status === 'pending' ? 'status-pending' : item.status === 'approved' ? 'status-approved' : 'status-rejected';
            } else if (type === 'memberships') {
                title = item.club.name;
                date = item.created_at;
                message = item.purpose;
            }

            const notification = document.createElement('div');
            notification.className = `notification ${status === 'Mới' ? 'new' : 'old'}`;
            notification.dataset.date = date;
            notification.innerHTML = `
                <div class="notification-content">
                    <h3>${title}</h3>
                    <time>Ngày đăng: ${formatDate(date)}</time>
                    <p>${message}</p>
                </div>
                <div class="notification-status ${statusClass}">${status}</div>
            `;
            container.appendChild(notification);
        }

        document.getElementById('prev-btn').disabled = currentPage === 1;
        document.getElementById('next-btn').disabled = end >= data.length;
    }

    function applyFilter() {
        const value = document.querySelector('input[name="data-filter"]:checked').value;
        let data = [];
        let type = 'notifications';

        if (value === 'newest') {
            data = notifications.filter(notification => new Date(notification.created_at).toDateString() === new Date().toDateString());
        } else if (value === 'oldest') {
            data = notifications.filter(notification => new Date(notification.created_at).toDateString() !== new Date().toDateString());
        } else if (value === 'club-requests') {
            data = clubRequests;
            type = 'club-requests';
        } else if (value === 'member-requests') {
            data = memberRequests;
            type = 'member-requests';
        } else if (value === 'memberships') {
            data = memberships;
            type = 'memberships';
        } else {
            data = notifications;
        }

        renderNotifications(data, type);
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
        if (currentPage * itemsPerPage < notifications.length) currentPage++;
        applyFilter();
    });

    applyFilter();
});
</script>

@endsection