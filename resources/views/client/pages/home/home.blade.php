@extends('client.layouts.master')

@section('title')
    Trang chủ
@endsection

@section('content')
<div style="background-color: #f8f9fa; padding: 0px 0;">
    <!-- Style Color of Hero Section -->
    <style>
        @keyframes backgroundColorChange {
            0% {
                background-color: #17a2b8; /* Màu xanh dương */
            }
            50% {
                background-color: #35ba54; /* Màu xanh lá */
            }
            100% {
                background-color: #5da9cd; /* Màu cam */
            }
        }
    
        .hero-section {
            animation: backgroundColorChange 0.9s infinite alternate; /* Áp dụng hiệu ứng thay đổi màu nền */
        }
        .card-text {
            height: 60px; /* Chiều cao cố định cho mô tả */
            overflow: hidden; /* Ẩn phần mô tả vượt quá chiều cao */
        }
    </style>
    <!-- Hero Section -->
    <div class="hero-section text-center text-white" style="position: relative;">
        <div style="padding: 60px 20px;">
            <h1 style="font-size: 2.5rem; font-family: 'Helvetica', sans-serif; font-weight: 700;">KHÁM PHÁ CÁC CÂU LẠC BỘ HÀNG ĐẦU</h1>
            <p style="font-size: 1.125rem; margin: 20px 0;">Tham gia câu lạc bộ để học hỏi, giao lưu và phát triển bản thân.</p>
            <a href="{{ route('client.notifications')}}" class="btn btn-warning rounded-pill px-4 py-2" style="font-size: 1rem;">Tìm hiểu thêm</a>
        </div>
    </div>   
    <!-- Benefits Section -->
    <div class="container pb-4" style="max-width: 100%; height: 600px; padding: 130px 50px 0px 50px; background-color: #fff6f6;">
        <div class="text-center mb-4">
            <h2 class="highlight-title" style="font-size: 1.75rem; font-weight: bold; color: #333;">Lợi ích khi tham gia câu lạc bộ</h2>
        </div>
        <!-- Bố cục lợi ích -->
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
            <div class="col">
                <div class="benefit-item text-center p-3 shadow-sm">
                    <div class="benefit-icon mb-3">
                        <img src="{{asset('assets/client/images/kn.jpg')}}" alt="Phát triển kỹ năng" class="img-fluid" style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">
                    </div>
                    <h6 class="benefit-title" style="font-size: 1rem; font-weight: bold; color: #444;">Phát triển kỹ năng</h6>
                    <p class="benefit-text" style="font-size: 0.85rem; color: #666;">Rèn luyện kỹ năng mềm và chuyên môn.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-item text-center p-3 shadow-sm">
                    <div class="benefit-icon mb-3">
                        <img src="{{asset('assets/client/images/kb.jpg')}}" alt="Giao lưu kết bạn" class="img-fluid" style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">
                    </div>
                    <h6 class="benefit-title" style="font-size: 1rem; font-weight: bold; color: #444;">Giao lưu kết bạn</h6>
                    <p class="benefit-text" style="font-size: 0.85rem; color: #666;">Kết nối với những người có chung sở thích.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-item text-center p-3 shadow-sm">
                    <div class="benefit-icon mb-3">
                        <img src="{{asset('assets/client/images/pt.jpg')}}" alt="Cơ hội phát triển" class="img-fluid" style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">
                    </div>
                    <h6 class="benefit-title" style="font-size: 1rem; font-weight: bold; color: #444;">Cơ hội phát triển</h6>
                    <p class="benefit-text" style="font-size: 0.85rem; color: #666;">Mở rộng cơ hội nghề nghiệp tương lai.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-item text-center p-3 shadow-sm">
                    <div class="benefit-icon mb-3">
                        <img src="{{asset('assets/client/images/tctt.jpg')}}" alt="Tăng cường sức khỏe" class="img-fluid" style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">
                    </div>
                    <h6 class="benefit-title" style="font-size: 1rem; font-weight: bold; color: #444;">Tăng cường sức khỏe</h6>
                    <p class="benefit-text" style="font-size: 0.85rem; color: #666;">Rèn luyện thể chất qua các hoạt động.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-item text-center p-3 shadow-sm">
                    <div class="benefit-icon mb-3">
                        <img src="{{asset('assets/client/images/ld.jpg')}}" alt="Kỹ năng lãnh đạo" class="img-fluid" style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">
                    </div>
                    <h6 class="benefit-title" style="font-size: 1rem; font-weight: bold; color: #444;">Kỹ năng lãnh đạo</h6>
                    <p class="benefit-text" style="font-size: 0.85rem; color: #666;">Phát triển kỹ năng quản lý và lãnh đạo.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- style Featured Clubs Section -->
    <style>
        .card {
            overflow: hidden; 
        }
    
        .card-img-top {
            transition: transform 0.3s ease, opacity 0.3s ease; 
        }
    
        .card:hover .card-img-top {
            transform: scale(1.1); 
            opacity: 0.9; 
        }
    
        .card-body {
            transition: padding 0.3s ease; 
        }
    
        .card:hover .card-body {
            padding-top: 1rem; 
        }
    
        .card-footer {
            transition: transform 0.3s ease;
        }
    </style>
    <!-- Featured Clubs Section -->
    <div class="container pb-5" style="max-width: 100%; padding: 50px; background-color: #f9eff1;">
        <div class="text-center mb-4">
            <h2 class="highlight-title">Các câu lạc bộ nổi bật</h2>
            <p style="font-size: 1.125rem;">Tìm hiểu các câu lạc bộ được yêu thích nhất tại trường</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            {{-- @for($i = 1; $i <= 8; $i++) --}}
            <div class="col">
                <div class="card shadow-sm border-0 rounded-lg bg-light" style="transition: transform 0.3s;">
                    <img src="{{asset('assets/client/images/club-1.jpg')}}" alt="CLB" class="card-img-top rounded-top" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.25rem; font-weight: bold;">CLB Truyền thông</h5>
                        <p class="card-text" style="font-size: 14px;">Khám phá các hoạt động thú vị và sôi nổi của CLB Truyền thông</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between position-relative">
                        <a href="#" class="text-decoration-none text-muted like-icon">
                            <i class="ph-heart me-2" style="cursor: pointer;"></i>
                            <span>29</span>
                        </a>
                        <a href="{{ route('client.details')}}" class="text-decoration-none text-primary see-more">
                            Xem thêm <i class="ph-arrow-circle-right ms-1"></i>
                        </a>
                        <!-- Vùng chứa hiệu ứng trái tim bay -->
                        <div class="heart-container"></div>
                    </div>      
                </div>
            </div>
            {{-- @endfor --}}
        </div>
    </div>
    
   <!-- Activities Section -->
    <div class="container" style="max-width: 100%; padding: 50px; background-color: #f6f9ffd6">
        <div class="text-center mb-4">
            <h2 class="highlight-title">Hoạt động của các câu lạc bộ</h2>
            <p style="font-size: 1.125rem;">Khám phá các hoạt động sôi nổi và thú vị trong các câu lạc bộ.</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card shadow-sm h-100 text-center">
                    <img src="{{asset('assets/client/images/vnua-7.jpg')}}" alt="Activity 1" class="card-img-top" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Buổi Giao Lưu Văn Hóa</h5>
                        <p class="card-text">Tham gia các buổi giao lưu để tìm hiểu về văn hóa và truyền thống.</p>
                    </div>
                    {{-- <div class="card-footer">
                        <a href="#" class="text-decoration-none text-primary">Xem chi tiết</a>
                    </div> --}}
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100 text-center">
                    <img src="{{asset('assets/client/images/vnua-8.jpg')}}" alt="Activity 2" class="card-img-top" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Buổi Chia Sẻ Kinh Nghiệm</h5>
                        <p class="card-text">Tham gia các buổi chia sẻ từ các chuyên gia trong các lĩnh vực khác nhau.</p>
                    </div>
                    {{-- <div class="card-footer">
                        <a href="#" class="text-decoration-none text-primary">Xem chi tiết</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Achievements Section -->
    <div class="container" style="max-width: 100%; padding: 50px; background-color: #fffdf6d6">
        <div class="text-center mb-4">
            <h2 class="highlight-title">Thành tựu của các câu lạc bộ</h2>
            <p style="font-size: 1.125rem;">Những thành tích nổi bật mà các câu lạc bộ đã đạt được trong các hoạt động.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card shadow-sm text-center">
                    <img src="{{asset('assets/client/images/vnua-9.jpg')}}" alt="Achievement 1" class="card-img-top" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Giải Nhất Cuộc Thi Sáng Tạo</h5>
                        <p class="card-text">Câu lạc bộ Khoa học đạt giải nhất trong cuộc thi sáng tạo cấp trường.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm text-center">
                    <img src="{{asset('assets/client/images/vnua-10.jpg')}}" alt="Achievement 2" class="card-img-top" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Giải Nhì Cuộc Thi Thể Thao</h5>
                        <p class="card-text">Câu lạc bộ Thể thao giành giải nhì trong cuộc thi thể thao toàn trường.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <div class="container pb-5" style="max-width: 100%; padding: 50px; background-color: #f9eff1;">
        <div class="text-center mb-4">
            <h2 class="highlight-title">Tin tức mới nhất</h2>
            <p style="font-size: 1.125rem;">Cập nhật các tin tức mới nhất về các hoạt động và sự kiện.</p>
        </div>
    
        <!-- Carousel -->
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/vnua-5.jpg')}}" alt="News 1" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Câu Lạc Bộ Âm Nhạc Tổ Chức Buổi Biểu Diễn</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cập nhật tin tức về buổi biểu diễn của câu lạc bộ Âm nhạc vào cuối tuần này.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/vnua-4.jpg')}}" alt="News 2" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Chào Mừng Năm Học Mới</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Lễ khai giảng năm học mới của các câu lạc bộ sẽ diễn ra vào tuần tới.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/vnua-3.jpg')}}" alt="News 3" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Khóa Học Mới Tại CLB Lập Trình</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cập nhật về khóa học lập trình cho các thành viên của câu lạc bộ.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/vnua-2.jpg')}}" alt="News 4" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Hội Thảo Chuyên Đề Về Khởi Nghiệp</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cập nhật thông tin về hội thảo khởi nghiệp của câu lạc bộ Kinh tế.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/vnua-8.jpg')}}" alt="News 5" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Buổi Giao Lưu Sinh Viên Quốc Tế</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Thông tin về buổi giao lưu sinh viên quốc tế sẽ được tổ chức trong tháng này.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/kn.jpg')}}" alt="News 6" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Đăng Ký Tham Gia CLB Thể Thao</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cập nhật thông tin về việc đăng ký tham gia câu lạc bộ thể thao.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/vnua-1.jpg')}}" alt="News 7" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Workshop Về Kỹ Năng Lãnh Đạo</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cập nhật về workshop phát triển kỹ năng lãnh đạo tại các câu lạc bộ.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/kn.jpg')}}" alt="News 8" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Tổ Chức Chuyến Tham Quan Câu Lạc Bộ Ngoại Ngữ</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cập nhật thông tin về chuyến tham quan câu lạc bộ Ngoại ngữ tuần này.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/bd.jpg')}}" alt="News 9" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Cuộc Thi Thể Thao Trong Nhà</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cuộc thi thể thao trong nhà của câu lạc bộ thể thao sẽ được tổ chức vào cuối tháng này.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm h-100 text-center" style="height: 300px;">
                                <img src="{{asset('assets/client/images/club-1.jpg')}}" alt="News 10" class="card-img-top" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="padding: 10px;">
                                    <h5 class="card-title" style="font-size: 1rem;">Chương Trình Giao Lưu Văn Hóa Quốc Tế</h5>
                                    <p class="card-text" style="font-size: 0.875rem;">Cập nhật thông tin về chương trình giao lưu văn hóa quốc tế của câu lạc bộ.</p>
                                </div>
                                <div class="card-footer" style="padding: 5px;">
                                    <a href="https://vnua.edu.vn/tin-tuc-su-kien" class="text-decoration-none text-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Điều khiển slide -->
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> 
   <!-- Call to Action Section -->
    <div class="text-center py-5" style="background-color: #17a2b8; color: white;">
        <h2 style="font-size: 2rem;">Bạn đã sẵn sàng tham gia hoặc thành lập một câu lạc bộ chưa?</h2>
        <p style="font-size: 1.125rem;">Đừng bỏ lỡ cơ hội trở thành một phần của cộng đồng sinh viên năng động.</p>
        <div class="dk"  style="padding: 20px">
            <a href="{{ route('client.form-member') }}" class="btn btn-warning rounded-pill px-4 py-2" style="margin-right: 20px;">Đăng ký tham gia CLB</a>
            <a href="{{ route('client.form-club') }}" class="btn btn-warning rounded-pill px-4 py-2">Đăng ký thành lập CLB</a>
        </div>             
    </div>

</div>
<!-- Add inline CSS for hover effects -->
<style>
    /* Hero Section: Change background color on hover */
    .hero-section:hover {
        background-color: rgba(23, 162, 184, 0.8); /* Thêm màu nền khi hover */
        transition: background-color 0.3s ease;
    }

    /* Card hover effect: Increase scale and add shadow */
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Benefits Section: Add subtle hover effect for cards */
    .card-body:hover {
        background-color: #e9ecef; /* Thay đổi màu nền khi hover */
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Featured Clubs Section: Add hover effect for club images */
    .card-img-top:hover {
        transform: scale(1.1); /* Phóng to hình ảnh khi hover */
        transition: transform 0.3s ease;
    }

    /* Call to Action Section: Change background on hover */
    .text-center.py-5:hover {
        background-color: #138496; /* Thay đổi màu nền khi hover */
        transition: background-color 0.3s ease;
    }

    /* Button hover effect: Change color on hover */
    .btn-warning:hover {
        background-color: #f0ad4e; /* Thay đổi màu nền của nút khi hover */
        border-color: #ec971f;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }
</style>

@endsection
