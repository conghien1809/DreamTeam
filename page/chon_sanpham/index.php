<?php
$db = new database();

$sql = "SELECT sanpham.MaSP, sanpham.TenSP, sanpham.img, sanpham.dongia, danhmucsp.IDLoaiSP 
        FROM sanpham 
        JOIN danhmucsp ON sanpham.IDLoaiSP = danhmucsp.IDLoaiSP";

$products = $db->xuatdulieu($sql);

?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $products = $_POST['products'];

    foreach ($products as $product_id) {
        $sql = "INSERT INTO chitietdontiec (MaSP) VALUES ('$product_id')";
        $db->dangky($sql);
    }

    // Hiển thị thông báo alert sau khi đặt hàng thành công
    echo "<script>
            alert('Đặt hàng thành công!');
            window.location.href = 'index.php?page=trangchu';
          </script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Chọn Sản Phẩm</h1>
    <form action="" method="post">
        <div class="product-list">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="product-item">
                        <?php 
                        $filePath = "./assets/images/" . $product['img'];
                        if (file_exists($filePath)): ?>
                            <img src="<?php echo $filePath; ?>" alt="<?php echo $product['TenSP']; ?>">
                        <?php else: ?>
                            <p>Hình ảnh không tồn tại</p>
                        <?php endif; ?>
                        <p><?php echo $product['TenSP']; ?> - <?php echo number_format($product['dongia']); ?> VND</p>
                        <input type="checkbox" name="products[]" value="<?php echo $product['MaSP']; ?>"> Chọn
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Không có sản phẩm nào để hiển thị.</p>
            <?php endif; ?>
        </div>
        <button type="submit">Xác Nhận Đặt Hàng</button>
    </form>
</body>
</html>

<style>
    h1 {
        color: #333;
        margin-bottom: 20px;
    }

    .product-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding-left: 55px;
        justify-content: center;
        max-width: 1200px;
    }

    .product-item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        width: 250px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-item img {
        max-width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .product-item p {
        margin: 10px 0;
        font-size: 16px;
        color: #555;
    }

    .product-item input {
        margin-top: 10px;
    }

    button {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    button:hover {
        background-color: #218838;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px 15px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-bottom: 20px;
        width: fit-content;
    }
</style>
