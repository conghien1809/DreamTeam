<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/chitietsanpham.css"/>
</head>
<body>
    
</body>
</html>
<?php
$obj = new database();
$sql="select S.*,TenLoaiSP from sanpham as S join danhmucsp as C on S.IDLoaiSP=C.IDLoaiSP where S.MaSP='$cate'";
$sanpham=$obj->xuatdulieu($sql);

if($sanpham) {
    echo '<div class="product-details">';
    echo '<h3 class="title">CHI TIẾT SẢN PHẨM</h3>';
    echo '<div class="product-container">
            <div class="product-image">
                <img src="assets/images/'.$sanpham[0]["img"].'" alt="'.$sanpham[0]["TenSP"].'">
            </div>
            <div class="product-info">
                <ul>
                    <li><b>Tên Sản phẩm:</b> '.$sanpham[0]["TenSP"].'</li>
                    <li><b>Giá:</b> '.number_format($sanpham[0]["dongia"]).' VND</li>
                    <li><b>Mô tả:</b> '.$sanpham[0]["MotaSP"].'</li>
                </ul>
                <form action="add_to_cart.php" method="POST" class="add-to-cart-form">
                    <input type="hidden" name="MaSP" value="'.$sanpham[0]["MaSP"].'">
                    <input type="hidden" name="TenSP" value="'.$sanpham[0]["TenSP"].'">
                    <input type="hidden" name="dongia" value="'.$sanpham[0]["dongia"].'">
                    <label for="quantity">Số lượng:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" required>
                    <button type="submit" class="add-to-cart-button">Thêm vào giỏ hàng</button>
                </form>
            </div>
          </div>';
    echo '<div class="back-link">
            <a href="index.php?page=sanpham&cate='.$sanpham[0]['IDLoaiSP'].'">Quay lại trang sản phẩm</a>
        </div>';
    
    echo '</div>';
} else {
    echo "<div class='no-product'>Không tồn tại sản phẩm</div>";
}
?>




