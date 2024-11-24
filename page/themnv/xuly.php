<?php
    if(isset($_POST['btnThem'])){
        $tennv=$_POST['tennv'];
        $diachi=$_POST['diachi'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
        $position=$_POST['position'];      
            $sql="insert into nhanvien(TenNV,Username,Password,DiaChi,MaLoai,SDT,Email) values ('$tennv','$username','$password','$diachi','$position','$sdt','$email')";
            $nhanvien=$obj->themnhanvien($sql);
            if($nhanvien){
                echo '<script>alert("Thêm thành công!");</script>';
            }
            else{
                echo "Thêm thất bại";
            }
        }