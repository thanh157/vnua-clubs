@extends('client.layouts.master')

@section('title')
    Chỉnh sửa trang cá nhân 
@endsection

@section('content')

<!-- Form chỉnh sửa profile -->
<div class="container mt-5 mb-5" style="padding: 0 250px">
    <h2 class="text-center mb-4">Chỉnh sửa hồ sơ cá nhân <i class="fa-solid fa-user-pen"></i></h2>
   <!-- Hiển thị thông báo nếu có -->
   @if(session('success'))
   <div class="alert alert-success">
       {{ session('success') }}
       <!-- Nút quay lại trang chủ -->
       <a href="{{ url('/') }}" class="btn btn-primary mt-3">Quay lại trang chủ</a>
   </div>
   @endif

    <form action="{{ route('client.edit')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Phần thông tin cá nhân cơ bản -->
        <div class="card mb-4">
            <div class="card-header">
                <strong>Thông tin cá nhân</strong>
            </div>
            <div class="card-body">
                <!-- Họ và tên -->
                <div class="mb-3">
                    <label for="full_name" class="form-label"><i class="ph-user-circle"></i> Họ và tên</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="Nguyễn Văn A" required>
                </div>

                <!-- Số điện thoại -->
                <div class="mb-3">
                    <label for="phone" class="form-label"><i class="ph-phone"></i> Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="0912345678" required>
                </div>

                <!-- Ảnh đại diện -->
                <div class="mb-3">
                    <label for="avatar" class="form-label"><i class="ph-image"></i> Ảnh đại diện</label>
                    <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                </div>
            </div>
        </div>

        <!-- Phần thông tin học tập -->
        <div class="card-body">
            <!-- Quê quán -->
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Thông tin học tập</strong>
                </div>
                <div class="card-body">
                    <!-- Quê quán -->
                    <div>
                        <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                            <option value="" selected>Chọn tỉnh thành</option>           
                        </select>
                        
                        <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                            <option value="" selected>Chọn quận huyện</option>
                        </select>
                        
                        <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                            <option value="" selected>Chọn phường xã</option>
                        </select>
                    </div>    
                </div>
            </div>      
        <style>
            /* Tăng kích thước font-size cho các thẻ select */
            .form-select {
                font-size: 14px; /* Điều chỉnh font size ở đây */
                padding: 10px;   /* Điều chỉnh padding cho thẻ select */
            }
        
            /* Tăng kích thước font-size cho các option trong select */
            .form-select option {
                font-size: 14px; /* Điều chỉnh font size cho option */
            }
        </style>
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
            method: "GET", 
            responseType: "application/json", 
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });
        
        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function () {
                district.length = 1;
                ward.length = 1;
                if(this.value != "") {
                    const result = data.filter(n => n.Id === this.value);
                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function () {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;
                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
        </script>
        </div>
        <!-- Khoa học -->
        <div class="card mb-4">
            <div class="card-header">
                <strong>Chọn khoa</strong>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="faculty" class="form-label"><i class="ph-graduation-cap"></i> Chọn khoa</label>
                    <select class="form-select form-select-sm mb-3" id="faculty" aria-label=".form-select-sm">
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
                <!-- Tên lớp -->
                <div class="mb-3">
                    <label for="class_name" class="form-label"><i class="ph-book"></i> Tên lớp</label>
                    <input type="text" class="form-control" id="class_name" name="class_name" placeholder="Nhập tên lớp" required>
                </div>
                <!-- Mã sinh viên -->
                <div class="mb-3">
                    <label for="student_code" class="form-label"><i class="fa-regular fa-address-card"></i> Mã sinh viên</label>
                    <input type="text" class="form-control" id="student_code" name="student_code" placeholder="Nhập mã sinh viên" required>
                </div>

                </div>
        </div>

        <!-- Nút Cập Nhật -->
        <div class="text-end mt-3 mb-3">
            <button type="submit" class="btn btn-primary" style="height: 45px; font-size:16px">Xong<i class="ph-paper-plane-tilt ms-2"></i></button>
        </div>

    </form>
</div>

@endsection
