<?php
    if(isset($_POST['btnXoa'])){
        $idnv=$_POST['btnXoa'];
        if($obj->xoanhanvien($idnv)){
            echo '<script>alert("Xóa thành công!");</script>';
        }
        else{
            echo '<script>alert("Xóa thất bại!");</script>';
        }
    }

?>