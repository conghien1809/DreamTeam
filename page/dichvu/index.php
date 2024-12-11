<?php
$db = new database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $guests = $_POST['guests'];
    $datetime = $_POST['datetime'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO dontiec (HoTen, SoDienThoai, Email, SoLuongKhach, NgayDat, GhiChu)
            VALUES ('$name', '$phone', '$email', $guests, '$datetime', '$notes')";

    if ($db->dangky($sql)) {
        // Chuyển hướng sang trang chọn sản phẩm
        header("Location: index.php?page=chon_sanpham");
        exit();
    } else {
        echo "Có lỗi xảy ra. Vui lòng thử lại.";
    }
}
?>
<div class="party-booking">
<div class="inner-wrap">
<form action="" method="post">
    <strong class="inner-title">NHẬN TƯ VẤN & BÁO GIÁ</strong>
    <div class="inner-form-wrap">
        <input type="text" name="name" placeholder="Họ Và Tên" required />
        <input type="text" name="phone" placeholder="Số Điện Thoại" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="number" name="guests" placeholder="Số Lượng Khách" required />
        <input type="datetime-local" name="datetime" required />
        <textarea name="notes" placeholder="Thêm ghi chú"></textarea>
    </div>
    <div class="inner-button">
        <button class="button" type="submit">Đặt Ngay</button>
    </div>
</form>
<div class="inner-picture">
                <img src="./assets/images/picture.jpg" alt="Hình ảnh" />
            </div>
            </div>
            </div>


