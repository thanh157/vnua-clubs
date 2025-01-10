@extends('client.layouts.master')

@section('title')
    Thành viên trong câu lạc bộ
@endsection

@section('content')
    <div class="member mb-5">
        <div class="mt-4 mb-4 text-center">
            <h3>Các thành viên trong câu lạc bộ <i class="fa-solid fa-users"></i></h3>
        </div>
        <div class="containerr mt-4 mb-4" style="padding: 0 100px">
            <!-- Ban chỉ huy -->
            <div class="side">
                <h2>Ban Chỉ Huy</h2>
                <ul class="leader-list">

                    @foreach ($presidents as $item)
                        <li class="leader-item">
                            <img src="{{ $item->avatar ? asset($item->avatar) : asset('assets/client/images/logo-vnua.jpg') }}" alt="Avatar 1">
                            <div>
                                <p>{{ $item->full_name }}</p>
                                <p>{{ $item->role }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Thành viên câu lạc bộ -->
            <div class="side">
                <h2>Thành Viên Câu Lạc Bộ</h2>
                <ul id="member-list" class="member-list">
                    <!-- Thành viên sẽ được hiển thị ở đây -->
                </ul>

                <!-- Phân trang -->
                <div class="pagination">
                    <button id="prev-page" onclick="changePage('prev')" disabled>&laquo; Trước</button>
                    <span id="current-page">Trang 1</span>
                    <button id="next-page" onclick="changePage('next')">Tiếp &raquo;</button>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('client.home') }}" class="btn btn-primary px-4 py-2 fs-6 text-white return-btn">
                Quay Lại Trang Chủ
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Dữ liệu thành viên từ server
            const members = @json($members);

            let currentPage = 1;
            const membersPerPage = 6;

            // Hàm hiển thị các thành viên trên mỗi trang
            function displayMembers() {
                const start = (currentPage - 1) * membersPerPage;
                const end = currentPage * membersPerPage;
                const membersToDisplay = members.slice(start, end);

                const memberList = document.getElementById('member-list');
                memberList.innerHTML = ''; // Xóa danh sách cũ

                membersToDisplay.forEach(member => {
                    const li = document.createElement('li');
                    li.innerHTML = `
                  <div class="avatar-container">
                      <img src="${member.avatar}" alt="Avatar">
                      <div class="member-info">
                          <p>${member.full_name}</p>
                          <p>${member.role}</p>
                      </div>
                  </div>
              `;
                    memberList.appendChild(li);
                });

                // Cập nhật thông tin trang hiện tại
                document.getElementById('current-page').textContent = `Trang ${currentPage}`;

                // Cập nhật trạng thái của nút phân trang
                document.getElementById('prev-page').disabled = currentPage === 1;
                document.getElementById('next-page').disabled = currentPage * membersPerPage >= members.length;
            }

            // Hàm xử lý việc chuyển trang
            function changePage(direction) {
                if (direction === 'next') {
                    currentPage++;
                } else if (direction === 'prev') {
                    currentPage--;
                }
                displayMembers(); // Cập nhật danh sách khi thay đổi trang
            }

            // Gọi hàm displayMembers khi trang được tải
            displayMembers();
        });
    </script>
@endsection
