@extends('client.layouts.master')

@section('title')
    Đăng kí tham gia câu lạc bộ
@endsection

@section('content')

<div style="padding: 20px 200px">
    <!-- Content area -->
    <div class="content" id="registrationContainer">

        <!-- Basic layout -->
        <div class="cardst shadow-box" id="registrationForm">
            <div class="card-header" id="cardHeader">
                <h5 class="mb-1">Đơn đăng ký tham gia câu lạc bộ</h5>
            </div>

            <div class="card-body mb-3 text-red" id="cardBody">
                Vui lòng điền đầy đủ thông tin bên dưới để đăng ký tham gia câu lạc bộ. Các thông tin cần thiết sẽ được sử dụng để xét duyệt yêu cầu của bạn.
            </div>

            <div class="card-body border-top">
                <form onsubmit="return showSuccessMessage()">
                    <div class="row mb-3 mt-3">
                        <label class="col-lg-3 col-form-label">Họ và tên:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên của bạn" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Mã sinh viên:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="student_id" placeholder="Nhập mã sinh viên của bạn" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Tên lớp:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="class_name" placeholder="Nhập tên lớp của bạn" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email" placeholder="Nhập email của bạn" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Số điện thoại:</label>
                        <div class="col-lg-9">
                            <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại của bạn" required pattern="[0-9]{10}" title="Vui lòng nhập đúng số điện thoại (10 chữ số)">
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Giới tính:</label>
                        <div class="col-lg-9">
                            <div class="form-check-horizontal">
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" value="male" checked required>
                                    <span class="form-check-label">Nam</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" value="female" required>
                                    <span class="form-check-label">Nữ</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" value="other" required>
                                    <span class="form-check-label">Khác</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Khoa:</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="faculty" required>
                                <option value="" disabled selected>Chọn khoa</option>
                                <option value="animal_science">Chăn nuôi</option>
                                <option value="information_technology">Công nghệ thông tin</option>
                                <option value="food_technology">Công nghệ thực phẩm</option>
                                <option value="agriculture_mechanical">Cơ - Điện</option>
                                <option value="biotechnology">Công nghệ sinh học</option>
                                <option value="tourism_language">Du lịch & Ngoại ngữ</option>
                                <option value="defense_education">Giáo dục quốc phòng</option>
                                <option value="economics_management">Kinh tế và Quản lý</option>
                                <option value="accounting">Kế toán và Quản trị kinh doanh</option>
                                <option value="social_science">Khoa học xã hội</option>
                                <option value="crop_science">Nông học</option>
                                <option value="environment">Tài nguyên và Môi trường</option>
                                <option value="veterinary">Thú y</option>
                                <option value="aquaculture">Thủy sản</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Tên câu lạc bộ muốn đăng kí:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name_club" placeholder="Nhập tên câu lạc bộ bạn muốn tham gia" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Mục đích tham gia câu lạc bộ:</label>
                        <div class="col-lg-9">
                            <textarea rows="3" cols="3" class="form-control" name="message" placeholder="Nhập câu trả lời của bạn" required></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Ảnh đại diện của bạn:</label>
                        <div class="col-lg-9">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" required>
                            <div class="form-text text-muted">Các định dạng được chấp nhận: .png, .jpg, .jpeg Kích thước tệp tối đa 2Mb</div>
                        </div>
                    </div>
                    
                    <div class="text-end mt-3 mb-3">
                        <button type="submit" class="btn btn-primary" style="height: 45px; font-size:16px">Gửi đơn <i class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <!-- /basic layout -->
    </div>
</div>

<!-- Success message -->
<div id="successMessage" style="display: none; text-align: center; margin-top: 20px; margin-bottom: 100px; font-size: 18px; color: green;">
    <p><strong>Đăng ký thành công!</strong></p>
    <p>Cảm ơn bạn đã đăng ký tham gia câu lạc bộ.</p>
    <button onclick="goHome()" class="btn btn-primary mt-3" style="height: 50px;font-size: 16px;">Quay lại trang chủ</button>
</div>

<script>
    function showSuccessMessage() {
        // Ẩn toàn bộ form đăng ký, header và body
        document.getElementById('registrationForm').style.display = 'none';
        document.getElementById('cardHeader').style.display = 'none';
        document.getElementById('cardBody').style.display = 'none';
        
        // Hiển thị thông báo đăng ký thành công
        document.getElementById('successMessage').style.display = 'block';

        // Ngừng gửi form thực tế
        return false;
    }

    // Hàm quay lại trang chủ
    function goHome() {
        window.location.href = '/'; // Bạn có thể thay '/' bằng URL trang chủ của bạn
    }
</script>

@endsection