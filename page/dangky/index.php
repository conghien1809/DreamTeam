<?php
    include("class/classxuly.php");
    $obj=new xuly;
    if(isset($_POST['btnDangKy'])){
        $hoten=$_POST['hoten'];
        $tendn=$_POST['tendn'];
        $mk=$_POST['mk'];
        $nlmk=$_POST['nlmk'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
        $diachi=$_POST['diachi'];

        $kiemtratk = "select COUNT(*) FROM khachhang WHERE Username = '$tendn'";
        $result = $obj->xuatdulieu($kiemtratk);
        
        if ($result && $result[0]['COUNT(*)'] > 0) {
            echo '<script>alert("Tên đăng nhập đã có người sử dụng! Vui lòng chọn tên đăng nhập khác.");</script>';
        } else {
            $sql = "insert into khachhang(TenKH, Username, Password, SDT, Email, DiaChi) 
                    values ('$hoten', '$tendn', '$mk', '$sdt', '$email', '$diachi')";
            if ($obj->themkhachhang($sql)) {
                echo '<script>alert("Đăng ký thành công!");</script>';
            } else {
                echo '<script>alert("Đăng ký không thành công!");</script>';
            }
        }
        }
?>

<section>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h3 class="text-center form-title"><strong>ĐĂNG KÝ TÀI KHOẢN</strong></h3>
                    <p class="text-center text-danger">Vui lòng nhập đầy đủ thông tin để đăng ký tài khoản</p>
                    <hr>

                    <form id="registrationForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label><b>Họ và tên:</b></label>
                            <input type="text" class="form-control" name="hoten" placeholder="Họ và tên" required>
                            <span class="text-danger">*</span>
                        </div>

                        <div class="form-group">
                            <label for="txtdn"><b>Tên đăng nhập:</b></label>
                            <input type="text" class="form-control" name="tendn" placeholder="Nhập tên đăng nhập" required>
                            <span class="text-danger">*</span>
                        </div>

                        <div class="form-group">
                            <label for="txtmk"><b>Mật khẩu:</b></label>
                            <input type="password" class="form-control" name="mk" placeholder="Nhập mật khẩu" required>
                            <span class="text-danger">*</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="txtnlmk"><b>Xác nhận mật khẩu:</b></label>
                            <input type="password" class="form-control" name="nlmk" placeholder="Xác nhận mật khẩu" required>
                            <span class="text-danger">*</span>
                        </div>

                        <div class="form-group">
                            <label for="txtsdt"><b>Số điện thoại:</b></label>
                            <input type="tel" class="form-control" name="sdt" placeholder="Nhập số điện thoại" required>
                            <span class="text-danger">*</span>
                        </div>
                        <div class="form-group">
                            <label for="txtmk"><b>Email:</b></label>
                            <input type="email" class="form-control" name="email" placeholder="Nhập email">
                            <span class="text-danger">*</span>
                        </div>

                        <div class="form-group">
                            <label for="txtmk"><b>Địa chỉ:</b></label>
                            <input type="text" class="form-control" name="diachi" placeholder="Nhập địa chỉ" required>
                            <span class="text-danger">*</span>
                        </div>
                        
                        <div class="text-center"><input type="submit" name="btnDangKy" value="Đăng ký"></div>

                        </form>
                    <div class="text-center mt-3">Bạn đã có tài khoản? <a class="text-danger" href="./danhnhap.html">Đăng nhập tại đây!</a></div>
                </div>
                <div class="text-center mt-3 pb-3">
                    <a href="./trangchu.html"><button type="button" class="btn btn-danger back-btn">Quay lại trang chủ</button></a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .form-container {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
}
.form-title {
    margin-bottom: 30px;
}
.form-control {
    border-radius: 30px;
}
.btn-custom {
    border-radius: 30px;
    width: 100%;
}
.back-btn {
    border-radius: 30px;
    width: 200px;
}
.error {
    font-size: 0.9em;
    color: red;
}
    </style>