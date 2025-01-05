@extends('client.layouts.master')

@section('title')
Chi tiết câu lạc bộ
@endsection

@section('content')

<div style="padding: 0 150px">
    <div class="profile-cover">
        <!-- Ảnh bìa -->
        <div class="profile-cover-img"
            style="background-image: url('http://127.0.0.1:8000/assets/client/images/mau-clb2.jpg');background-position: 20% 80%;background-size: cover;background-repeat: no-repeat;border-radius: 10px;">
        </div>
        <!-- Nội dung -->
        <div class="d-flex align-items-center position-relative mx-3 mb-3" style="padding-right: 20px; padding-top: 10px">

            <!-- Avatar - ở bên trái -->
            <div class="me-lg-3 mb-0 position-relative">
                <a href="#">
                    <img src="http://127.0.0.1:8000/assets/client/images/mau-clb1.jpg" class="img-thumbnail shadow" width="150" alt="" style="border-radius: 50%; object-fit: cover; height:140px">
                </a>
                <!-- Biểu tượng máy ảnh -->
                <i class="fa fa-camera" style="position: absolute; bottom: 5px; right: 5px; background-color: rgba(0,0,0,0.5); color: white; border-radius: 50%; padding: 5px; font-size: 20px;"></i>
            </div>

            <!-- Tên câu lạc bộ - căn giữa với avatar -->
            <div class="text-black">
                <h1 class="mb-0">{{ $clubDto->name }}</h1>
                <span class="d-block">{{ $clubDto->category ?? 'Chưa phân loại' }}</span>
            </div>
        </div>
    </div>

    {{-- {{-- view club --}}
    <div class="content">
        <!-- Simple statistics -->
        <div class="content">
            <!-- Tổng quan về Câu lạc bộ -->

            <div class="mb-3">
                <h6 class="mb-0">Tổng quan về Câu lạc bộ</h6>
                <span class="text-muted">Thống kê chính</span>
            </div>

            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-heart text-danger me-3" style="font-size: 2rem;"></i>
                            <div class="flex-fill text-end">
                                <h4 class="mb-0">{{ $clubDto->likes }}</h4>
                                <span class="text-muted">Lượt thích</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-users text-indigo me-3" style="font-size: 2rem;"></i>
                            <div class="flex-fill text-end">
                                <h4 class="mb-0">245</h4>
                                <span class="text-muted">Thành viên</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-trophy text-warning me-3" style="font-size: 2rem;"></i>
                            <div class="flex-fill text-end">
                                <h4 class="mb-0">20</h4>
                                <span class="text-muted">Giải thưởng</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-calendar-check text-info me-3" style="font-size: 2rem;"></i>
                            <div class="flex-fill text-end">
                                <h4 class="mb-0">10</h4>
                                <span class="text-muted">Số năm hoạt động</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-primary text-white">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <h4 class="mb-0">390</h4>
                                Dự án đã làm
                            </div>
                            <i class="fa-solid fa-folder-open text-white opacity-75 ms-3" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-danger text-white">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <h4 class="mb-0">38</h4>
                                Dự án tương lai
                            </div>
                            <i class="fa-solid fa-lightbulb text-white opacity-75 ms-3" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-success text-white">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <h4 class="mb-0">15</h4>
                                Sự kiện đã tổ chức
                            </div>
                            <i class="fa-solid fa-calendar-day text-white opacity-75 ms-3" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-primary text-white">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <h4 class="mb-0">100</h4>
                                Bài viết
                            </div>
                            <i class="fa-solid fa-newspaper text-white opacity-75 ms-3" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-danger text-white">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <h4 class="mb-0">$5000</h4>
                                Tổng chi phí
                            </div>
                            <i class="fa-solid fa-money-bill-wave text-white opacity-75 ms-3" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
        
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-body bg-success text-white">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <h4 class="mb-0">5</h4>
                                Mẫu đơn
                            </div>
                            <i class="fa-solid fa-star text-white opacity-75 ms-3" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div> --}}
            </div>

            {{-- gioi thieu chi tiet clb --}}
            <div class="mt-4 mb-3 d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">
                <!-- Left content -->
                <div class="flex-1 order-2 order-lg-1">
                    <!-- Task overview -->
                    <div class="card">
                        <div class="card-header d-lg-flex py-lg-0">
                            <h5 class="py-lg-3 mb-0">CLB Truyền thông</h5>
                            <div class="mt-1 my-lg-auto ms-lg-auto">
                                <a href="{{ route('client.form-member')}}" class="btn btn-primaryy" style="height: 45px; font-size:16px">Tham gia ngay <i class="ph-user-plus ms-2"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-4">
                                <h6><i class="ph-flag banner-icon"></i> Mô tả câu lạc bộ</h6>
                                <p class="mb-3">Câu lạc bộ Truyền thông trẻ là nơi tập hợp các bạn trẻ đam mê lĩnh vực truyền thông, sáng tạo nội dung, và kết nối cộng đồng. Chúng tôi luôn nỗ lực tạo ra môi trường năng động để thành viên phát triển kỹ năng và thể hiện bản thân.</p>
                            </div>

                            <!-- Sử dụng Flexbox để hiển thị thông tin trong 1 dòng -->
                            <div class="d-flex flex-wrap mb-4">
                                <div class="info-item me-4">
                                    <h6><i class="ph-calendar"></i> Ngày thành lập</h6>
                                    <p class="mb-3">15/07/2003</p>
                                </div>
                                <div class="info-item me-4">
                                    <h6><i class="fas fa-bullhorn"></i> Lĩnh vực hoạt động</h6>
                                    <p class="mb-3">Truyền thông</p>
                                </div>
                                <div class="info-item">
                                    <h6><i class="ph-map-pin"></i> Địa điểm hoạt động</h6>
                                    <p class="mb-3">Sân sinh viên</p>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6><i class="ph-target"></i> Mục đích và sứ mệnh</h6>
                                <p class="mb-4">Câu lạc bộ hướng đến mục tiêu xây dựng một cộng đồng sáng tạo, nơi các thành viên có thể học hỏi và phát triển bản thân. Sứ mệnh của chúng tôi là truyền cảm hứng và tạo giá trị thông qua các hoạt động ý nghĩa.</p>

                                <div class="row px-3">
                                    <div class="col-lg-6">
                                        <dl>
                                            <dt class="fs-sm text-primary text-uppercase mb-2"><i class="ph-pencil-simple-line"></i> 1. Sáng tạo nội dung</dt>
                                            <dd class="mb-3">Tạo ra những nội dung độc đáo và chất lượng để chia sẻ giá trị đến cộng đồng.</dd>

                                            <dt class="fs-sm text-primary text-uppercase mb-2"><i class="ph-users-three"></i> 2. Kết nối cộng đồng</dt>
                                            <dd class="mb-3">Tăng cường giao lưu và kết nối các bạn trẻ có cùng đam mê.</dd>

                                            <dt class="fs-sm text-primary text-uppercase mb-2"><i class="ph-briefcase"></i> 3. Phát triển kỹ năng</dt>
                                            <dd class="mb-3">Đào tạo và hỗ trợ thành viên nâng cao kỹ năng mềm và chuyên môn.</dd>
                                        </dl>
                                    </div>

                                    <div class="col-lg-6">
                                        <dl>
                                            <dt class="fs-sm text-primary text-uppercase mb-2"><i class="ph-eye"></i> 1. Tầm nhìn</dt>
                                            <dd class="mb-3">Trở thành một tổ chức truyền thông hàng đầu dành cho giới trẻ.</dd>

                                            <dt class="fs-sm text-primary text-uppercase mb-2"><i class="ph-shield-check"></i> 2. Giá trị cốt lõi</dt>
                                            <dd class="mb-3">Đoàn kết, sáng tạo, và chia sẻ giá trị thực sự.</dd>

                                            <dt class="fs-sm text-primary text-uppercase mb-2"><i class="ph-flag-banner"></i> 3. Khẩu hiệu</dt>
                                            <dd class="mb-3">"Sáng tạo không giới hạn".</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- table time  --}}
            <div class="mb-3">
                <h6>Thông tin hoạt động</h6>
                <p class="mb-3">Câu lạc bộ Truyền thông trẻ tổ chức các hoạt động định kỳ với mục đích kết nối các thành viên và phát triển kỹ năng truyền thông.</p>
            </div>
            <div class="table-responsive border rounded">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            {{-- <th>STT</th> --}}
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Số thành viên</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($posts as $index => $post) --}}
                        <tr>

                            <td>{{ $clubDto->name }}</td>
                            <td>{{ $clubDto->description }}</td>
                            <td>{{ $clubDto->membserAmount }}</td>
                        </tr>
                        {{-- @endforeach                    --}}
                    </tbody>
                </table>
            </div>

            {{-- Images and information  --}}
            <style>
                .card-img {
                    height: 150px;
                    /* Đặt chiều cao cố định */
                    object-fit: cover;
                    /* Giữ tỷ lệ và cắt phần thừa nếu cần */
                    width: 100%;
                    /* Đảm bảo chiều rộng chiếm 100% của phần tử cha */
                }
            </style>
            <!-- Tiêu đề cho phần Hình ảnh -->
            <div class="mt-4">
                <div class="mb-3 pt-4">
                    <h6>Hình ảnh và tài liệu</h6>
                    <p>Dưới đây là một số hình ảnh và tài liệu liên quan đến hoạt động của câu lạc bộ:</p>
                </div>
                <div class="row">
                    @for($i = 1; $i <= 4; $i++) <!-- Ví dụ lặp qua 3 hình ảnh -->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-img-actions mx-1 mt-1">
                                    <img class="card-img img-fluid" src="{{ asset('assets/client/images/clb-' . $i . '.jpg') }}" alt="Hình ảnh {{ $i }}">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="{{ asset('assets/client/images/clb-' . $i . '.jpg') }}" class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox" data-gallery="gallery1">
                                            <i class="ph-magnifying-glass-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="fw-semibold">Hình ảnh của CLB</div>
                                        <span class="text-muted ms-auto">300Kb</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                </div>
            </div>

            {{-- Video --}}
            <div class="mb-3 pt-2">
                <div class="mb-3 pt-4">
                    <h6>Một số video nổi bật của câu lạc bộ</h6>
                </div>
            </div>
            <div class="row">
                @for($i = 1; $i <= 4; $i++)
                    <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-img-actions mx-1 mt-1 position-relative">
                            <!-- Sử dụng ID video mới để thay ảnh bìa -->
                            <img class="card-img img-fluid"
                                src="{{ asset('assets/client/images/demo-' . $i . '.jpg') }}" alt="Hình ảnh {{ $i }}"
                                alt="Video YouTube">

                            <a href="https://www.youtube.com/watch?v=Llw9Q6akRo4&list=RDLlw9Q6akRo4&start_radio=1"
                                target="_blank"
                                class="position-absolute top-50 start-50 translate-middle">
                                <i class="bi bi-play-fill text-white" style="font-size: 4rem"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-start flex-wrap">
                                <div class="fw-semibold">Video YouTube</div>
                                <span class="text-muted ms-auto">5.2Mb</span>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>

        {{-- Danh gia  --}}
        <div class="mb-3 pt-4">
            <h6 class="mb-0">Đánh giá câu lạc bộ</h6>
            <span class="text-muted">Cập nhật thông tin và tiến độ hoạt động</span>
        </div>
        <div class="row">
            <!-- Đánh giá hoạt động chính của câu lạc bộ -->
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-clipboard-check text-primary opacity-75 me-3" style="font-size: 2rem;"></i>
                        <div class="flex-fill">
                            <h6 class="mb-0">Hoạt động chính</h6>
                            <span class="text-muted">Đánh giá hoạt động tháng 6</span>
                        </div>
                    </div>
                    <div class="progress mb-2" style="height: 0.125rem;">
                        <div class="progress-bar bg-primary" style="width: 85%"></div>
                    </div>
                    <div>
                        <span class="float-end">85%</span>
                        Hoạt động đã hoàn thành tốt
                    </div>
                </div>
            </div>

            <!-- Đánh giá sự tham gia của thành viên -->
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-users text-success opacity-75 me-3" style="font-size: 2rem;"></i>
                        <div class="flex-fill">
                            <h6 class="mb-0">Sự tham gia của thành viên</h6>
                            <span class="text-muted">Cập nhật tháng 4</span>
                        </div>
                    </div>
                    <div class="progress mb-2" style="height: 0.125rem;">
                        <div class="progress-bar bg-success" style="width: 75%"></div>
                    </div>
                    <div>
                        <span class="float-end">75%</span>
                        Tham gia tích cực
                    </div>
                </div>
            </div>

            <!-- Tài chính câu lạc bộ -->
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-wallet text-warning opacity-75 me-3" style="font-size: 2rem;"></i>
                        <div class="flex-fill">
                            <h6 class="mb-0">Tài chính câu lạc bộ</h6>
                            <span class="text-muted">Cập nhật tài chính tháng 5</span>
                        </div>
                    </div>
                    <div class="progress mb-2" style="height: 0.125rem;">
                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                    </div>
                    <div>
                        <span class="float-end">70%</span>
                        Ngân sách khả dụng
                    </div>
                    <div class="mt-3">
                        <span class="text-muted">Chi tiêu tháng này:</span> 15 triệu VND
                    </div>
                    <div>
                        <span class="text-muted">Nguồn tài trợ:</span> 30 triệu VND từ quỹ cộng đồng
                    </div>
                </div>
            </div>
        </div>

        {{-- quản lí chi tiêu --}}
        <div class="mb-3 pt-4">
            <h6 class="mb-0">Các khoản phí và danh sách các thành viên trong CLB (Dành cho thành viên CLB)</h6>
            <span class="text-muted">Bạn có thể xem các khoản phí của mình và số lượng thành viên trong câu lạc bộ của mình ở đây</span>
        </div>
        {{-- Submit phi clb --}}
        <div class="row">
            {{-- Submit phi clb --}}
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body position-relative">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-clipboard-check text-primary opacity-75 me-3" style="font-size: 2rem;"></i>
                        <div class="flex-fill">
                            <h6 class="mb-0">Các khoản chi phí của bạn</h6>
                            <span class="text-muted">Xem các khoản phí của bạn tại đây</span>
                        </div>
                    </div>
                    <div class="">
                        <!-- Nội dung khác có thể được thêm vào đây -->
                    </div>
                    <a href="{{ route('client.spending')}}" class="text-end text-decoration-underline mt-3 d-inline-block" id="expenditureLink">Xem chi tiêu của bạn</a>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body position-relative">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-clipboard-check text-primary opacity-75 me-3" style="font-size: 2rem;"></i>
                        <div class="flex-fill">
                            <h6 class="mb-0">Danh sách thành viên</h6>
                            <span class="text-muted">Xem danh sách thành viên tại đây</span>
                        </div>
                    </div>
                    <div class="">
                        <!-- Nội dung khác có thể được thêm vào đây -->
                    </div>
                    <a href="{{ route('client.members')}}" class="text-end text-decoration-underline mt-3 d-inline-block" id="expenditureLink">Xem danh sách thành viên</a>
                </div>
            </div>

        </div>
        {{-- end QLCT--}}


    </div>
</div>
</div>

@endsection