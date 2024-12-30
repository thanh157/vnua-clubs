@extends('client.layouts.master')

@section('title')
    Thành viên trong câu lạc bộ
@endsection

@section('content')

<div class="member mb-5">
  <div class="mt-4 mb-4 text-center">
    <h3>Các thành viên trong câu lạc bộ  <i class="fa-solid fa-users"></i></h3>
  </div>
  <div class="containerr mt-4 mb-4" style="padding: 0 100px">
    <!-- Ban chỉ huy -->
    <div class="side">
      <h2>Ban Chỉ Huy</h2>
      <ul class="leader-list">
        <li class="leader-item">
          <img src="{{ asset('assets/client/images/logo-vnua.jpg') }}" alt="Avatar 1">
          <div>
            <p>Nguyễn Văn A</p>
            <p>Chủ nhiệm</p>
          </div>
        </li>
        <li class="leader-item">
          <img src="{{ asset('assets/client/images/logo-vnua.jpg') }}" alt="Avatar 2">
          <div>
            <p>Trần Thị B</p>
            <p>Phó Chủ nhiệm</p>
          </div>
        </li>
        <li class="leader-item">
          <img src="{{ asset('assets/client/images/logo-vnua.jpg') }}" alt="Avatar 3">
          <div>
            <p>Lê Minh C</p>
            <p>Thư ký</p>
          </div>
        </li>
        <li class="leader-item">
          <img src="{{ asset('assets/client/images/logo-vnua.jpg') }}" alt="Avatar 4">
          <div>
            <p>Phạm Thị D</p>
            <p>Thủ quỹ</p>
          </div>
        </li>
        <li class="leader-item">
          <img src="{{ asset('assets/client/images/logo-vnua.jpg') }}" alt="Avatar 5">
          <div>
            <p>Nguyễn Thành E</p>
            <p>Trưởng ban sự kiện</p>
          </div>
        </li>
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
    <a href="{{ route('client.home')}}" class="btn btn-primary px-4 py-2 fs-6 text-white return-btn">
        Quay Lại Trang Chủ
    </a>
  </div>
</div>

@endsection
