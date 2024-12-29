@extends('client.layouts.master')

@section('title')
    Hoạt động gần đây
@endsection

@section('content')
<div class="container my-4 mt-4" style="padding: 0 140px">
    <h2 class="text-center mb-4" style="font-family: Arial, sans-serif; font-size: 18px;">Các Hoạt Động Câu Lạc Bộ</h2>

    <div class="row" id="clubs-container">
        <!-- Các câu lạc bộ sẽ được chèn vào đây bằng JavaScript -->
    </div>

    <!-- Điều hướng phân trang -->
    <div class="pagination text-center">
        <button id="prev-btn" disabled>Trước</button>
        <button id="next-btn">Tiếp</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const clubsData = [
        {
            title: "Câu Lạc Bộ Âm Nhạc",
            location: "Phòng Âm Nhạc, Học viện Nông nghiệp Việt Nam",
            date: "Mỗi Thứ Bảy hàng tuần",
            description: "Câu lạc bộ Âm nhạc tạo ra một không gian để sinh viên giao lưu, học hỏi và phát triển khả năng âm nhạc của mình. Các hoạt động chính bao gồm: luyện tập các bài hát, chơi nhạc cụ và tổ chức các buổi biểu diễn âm nhạc định kỳ."
        },
        {
            title: "Câu Lạc Bộ Thể Dục Thể Thao",
            location: "Sân Thể Dục, Học viện Nông nghiệp Việt Nam",
            date: "Thứ Hai, Thứ Tư, Thứ Sáu hàng tuần",
            description: "Câu lạc bộ Thể dục Thể thao chuyên tổ chức các hoạt động thể thao như bóng đá, cầu lông, bóng rổ và chạy bộ. Các thành viên sẽ được rèn luyện thể chất và tham gia vào các giải đấu nội bộ của câu lạc bộ."
        },
        {
            title: "Câu Lạc Bộ Khoa Học Công Nghệ",
            location: "Phòng Lab, Học viện Nông nghiệp Việt Nam",
            date: "Chủ Nhật hàng tuần",
            description: "Câu lạc bộ Khoa học Công nghệ là nơi để sinh viên đam mê nghiên cứu khoa học, sáng tạo và thử nghiệm các dự án công nghệ. Các hoạt động bao gồm các cuộc thi sáng tạo, các hội thảo công nghệ và các dự án nghiên cứu khoa học thực tế."
        },
        {
            title: "Câu Lạc Bộ C++",
            location: "Phòng Lab, Học viện Nông nghiệp Việt Nam",
            date: "Chủ Nhật hàng tuần",
            description: "Câu lạc bộ Khoa học Công nghệ là nơi để sinh viên đam mê nghiên cứu khoa học, sáng tạo và thử nghiệm các dự án công nghệ. Các hoạt động bao gồm các cuộc thi sáng tạo, các hội thảo công nghệ và các dự án nghiên cứu khoa học thực tế."
        }
    ];

    const backgroundColors = ['#f0e1f1', '#d0f4de', '#cce7ff', '#fdf1d0', '#f8f3e1', '#d3b7ff', '#b7f3ff', '#f2c9bb', '#ffb6b6']; // Màu nền trang
    const borderColors = ['#ff69b4', '#32cd32', '#4682b4', '#ffa500', '#ff6347', '#dda0dd', '#ff1493', '#8a2be2', '#20b2aa']; // Màu khung thông báo
    const clubsPerPage = 2; // Số câu lạc bộ hiển thị trên mỗi trang
    let currentPage = 1;

    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const clubsContainer = document.getElementById('clubs-container');

    // Hàm để lấy màu nền khác với màu của khung
    function getUniqueBackgroundColor(borderColor) {
        return backgroundColors.filter(bgColor => bgColor !== borderColor)[Math.floor(Math.random() * (backgroundColors.length - 1))];
    }

    function renderClubs() {
        clubsContainer.innerHTML = ''; // Xóa nội dung cũ

        const start = (currentPage - 1) * clubsPerPage;
        const end = start + clubsPerPage;
        const clubsToDisplay = clubsData.slice(start, end);

        clubsToDisplay.forEach((club, index) => {
            const clubCard = document.createElement('div');
            clubCard.classList.add('col-12', 'mb-3', 'club-item');

            // Chọn màu ngẫu nhiên từ mảng màu khung và màu nền khác nhau
            const clubBorderColor = borderColors[index % borderColors.length];
            const clubBackgroundColor = getUniqueBackgroundColor(clubBorderColor);

            clubCard.innerHTML = `
                <div class="card" style="border-radius: 8px; border: 1px solid ${clubBorderColor}; background-color: ${clubBackgroundColor};">
                    <div class="card-body" style="padding: 15px;">
                        <h5 class="card-title" style="font-size: 16px; font-weight: bold;">${club.title}</h5>
                        <p class="card-text" style="font-size: 0.875rem; margin-bottom: 8px;"><strong>Địa điểm:</strong> ${club.location}</p>
                        <p class="card-text" style="font-size: 0.875rem; margin-bottom: 8px;"><strong>Ngày tổ chức:</strong> ${club.date}</p>
                        <p class="card-text" style="font-size: 0.875rem; margin-bottom: 8px;">${club.description}</p>
                        <a href="#" class="btn btn-primary register-btn" style="font-size: 14px; padding: 10px 40px; background-color: #3c92e7; border-color: #2c3e50;">Đăng Ký Tham Gia</a>
                    </div>
                </div>
            `;
            clubsContainer.appendChild(clubCard);
        });

        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage * clubsPerPage >= clubsData.length;
    }

    function showNext() {
        if (currentPage * clubsPerPage < clubsData.length) {
            currentPage++;
            renderClubs();
        }
    }

    function showPrevious() {
        if (currentPage > 1) {
            currentPage--;
            renderClubs();
        }
    }

    prevBtn.addEventListener('click', showPrevious);
    nextBtn.addEventListener('click', showNext);

    renderClubs(); // Hiển thị các câu lạc bộ khi trang tải
});
</script>

<style>
    .register-btn:hover {
        background-color: #f58646 !important; /* Màu khi hover */
        border-color: #e68900 !important; /* Viền khi hover */
    }
</style>

@endsection
