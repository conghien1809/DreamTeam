<h3 align="center">DANH SÁCH SẢN PHẨM</h3>
<div style="text-align: right; padding: 10px 0;">
    <a href="index.php?page=themsanpham" 
       style="display: inline-block; 
              background-color: #007bff; 
              color: #fff; 
              text-decoration: none; 
              padding: 10px 20px; 
              border-radius: 5px; 
              font-size: 14px; 
              font-weight: bold; 
              transition: background-color 0.3s ease, transform 0.2s ease;"
       >
        + Thêm sản phẩm
    </a>
</div>
<?php
include("class/classxuly.php");
$obj = new xuly();
include("page/quanlysanpham/xuly.php");
$sanpham=$obj->danhsachsanpham();
if($sanpham)
{
    echo '<form method="post"><table width="100%" border="1" style="border-collapse:collapse">
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Gia</th>
        <th>Hinh</th>
        <th>Thao tac</th>
    </tr>';
    for($i=0;$i<count($sanpham);$i++)
    {
        echo '<tr>
                <td align="center">'.($i+1).'</td>
                <td><a href="index.php?page=suasanpham&cate='.$sanpham[$i]["MaSP"].'">'.$sanpham[$i]["TenSP"].'</a></td>
                <td align="center">'.number_format($sanpham[$i]["dongia"]).'</td>
                <td align="center"><img src="assets/images/'.$sanpham[$i]["img"].'" width="50" /></td>
                <td align="center"><button onclick="return confirm(\'Ban co chac muon xoa sp nay khong?\')" type="submit" name="btXoa" value="'.$sanpham[$i]["MaSP"].'">xoa</button></td>
            </tr>';
    }
    echo '</table></form>';
}
?>


