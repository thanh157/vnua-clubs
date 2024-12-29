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
                <label><input type="radio" name="date-filter" value="all" checked> Tất cả thông báo</label>
            </li>
            <li>
                <label><input type="radio" name="date-filter" value="newest"> Thông báo mới</label>
            </li>
            <li>
                <label><input type="radio" name="date-filter" value="oldest"> Thông báo cũ</label>
            </li>
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Danh sách thông báo
    const notifications = [
        { club: "CLB Lập trình Web", date: "2024-12-29", description: "Tuyển thành viên tham gia phát triển website." },
        { club: "CLB Thiết kế Đồ họa", date: "2024-12-28", description: "Tuyển thành viên sáng tạo và thiết kế." },
        { club: "CLB Kỹ thuật Phần mềm", date: "2024-12-27", description: "Tuyển lập trình viên backend và frontend." },
        { club: "CLB Công nghệ AI", date: "2024-12-29", description: "Tuyển thành viên nghiên cứu AI/ML." },
        { club: "CLB Game Development", date: "2024-12-25", description: "Tuyển lập trình viên và nhà thiết kế game." },
        { club: "CLB UX/UI", date: "2024-12-24", description: "Tuyển thành viên phát triển trải nghiệm người dùng." },
        { club: "CLB Robotics", date: "2024-12-23", description: "Tuyển thành viên tham gia thiết kế robot." },
        { club: "CLB IoT", date: "2024-12-22", description: "Tuyển thành viên phát triển ứng dụng IoT." },
        { club: "CLB Blockchain", date: "2024-12-21", description: "Tuyển thành viên nghiên cứu blockchain." },
        { club: "CLB Cloud Computing", date: "2024-12-20", description: "Tuyển thành viên phát triển ứng dụng cloud." }
    ];

    const itemsPerPage = 6;
    let currentPage = 1;

    function renderNotifications() {
        const container = document.getElementById('notification-container');
        container.innerHTML = '';

    const start = (currentPage - 1) * itemsPerPage;
        const end = Math.min(start + itemsPerPage, notifications.length);

        for (let i = start; i < end; i++) {
            const { club, date, description } = notifications[i];
            const isNew = new Date(date).toDateString() === new Date().toDateString();

            const notification = document.createElement('div');
            notification.className = `notification ${isNew ? 'new' : 'old'}`;
            notification.dataset.date = date;
            notification.innerHTML = `
                <div class="notification-content">
                    <h3>${club}</h3>
                    <time>Ngày đăng: ${date}</time>
                    <p>${description}</p>
                </div>
                <div class="notification-status">${isNew ? 'Mới' : 'Cũ'}</div>
            `;
            container.appendChild(notification);
        }

        document.getElementById('prev-btn').disabled = currentPage === 1;
        document.getElementById('next-btn').disabled = end >= notifications.length;
    }

    function applyFilter() {
        const value = document.querySelector('input[name="date-filter"]:checked').value;
        document.querySelectorAll('.notification').forEach(notification => {
            const isNew = notification.classList.contains('new');
            const isOld = notification.classList.contains('old');
            if (value === 'newest' && !isNew) notification.style.display = 'none';
            else if (value === 'oldest' && !isOld) notification.style.display = 'none';
            else notification.style.display = 'flex';
        });
    }

    document.querySelectorAll('input[name="date-filter"]').forEach(input => {
        input.addEventListener('change', () => {
            renderNotifications();
            applyFilter();
        });
    });

    document.getElementById('prev-btn').addEventListener('click', () => {
        if (currentPage > 1) currentPage--;
        renderNotifications();
        applyFilter();
    });

    document.getElementById('next-btn').addEventListener('click', () => {
        if (currentPage * itemsPerPage < notifications.length) currentPage++;
        renderNotifications();
        applyFilter();
    });

    renderNotifications();
});
</script>

@endsection
