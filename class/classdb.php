<?php
    class database{
        private function ketnoi(){
            $conn=new mysqli("localhost","root","","thedreamteam");
            if($conn->connect_error){
                echo "Kết nối thất bại!";
                exit();
            }
            else{
                return $conn;
            }
        }
        public function xuatdulieu($sql){
            $link=$this->ketnoi();
            $arr=array();
            $result=$link->query($sql);
            if($result->num_rows){
                while($row=$result->fetch_assoc())
                $arr[]=$row;
            return $arr;
            }
            else{
                return 0;
            }
        }

        public function dangky($sql){
            $link=$this->ketnoi();
            if($link->query($sql)){
                return 1;
            }
            else{
                return 0;
            }
        }
        public function dangnhap($tk, $mk, $loai = null) {
            $link = $this->ketnoi();
            if ($loai === null) {
                $sql = "select MaKH from khachhang where Username='$tk' and Password='$mk'";
            } elseif ($loai === 1) {
                $sql = "select MaNV from nhanvien where Username='$tk' and Password='$mk' and MaLoai=1";
            } elseif ($loai === 2) {
                $sql = "select MaNV from nhanvien where Username='$tk' and Password='$mk' and MaLoai=2";
            } else {
                return 0;
            }
        
            $result = $link->query($sql);
            if ($result->num_rows) {
                $row = $result->fetch_assoc();
                return reset($row); // Trả về giá trị cột đầu tiên
            }
            return 0;
        }
        

        public function xoadulieu($sql){
            $link=$this->ketnoi();
            if($link->query($sql)){
                return 1;
            }
            else
            {
                return 0;
            }
        }

        public function suadulieu($sql){
            $link=$this->ketnoi();
            if($link->query($sql)){
                return 1;
            }
            else{
                return 0;
            }
        } 

    }
/*
public function dangnhap($tk, $mk, $loaiNguoiDung) {
    $link = $this->ketnoi();
    // Xác định bảng và cột dựa trên loại người dùng
    if ($loaiNguoiDung === 'khachhang') {
        $table = 'khachhang';
        $idColumn = 'MaKH';
    } elseif ($loaiNguoiDung === 'nhanvien') {
        $table = 'nhanvien';
        $idColumn = 'idnv';
    } else {
        return 0; // Trường hợp loại người dùng không hợp lệ
    }

    // Truy vấn SQL
    $sql = "SELECT $idColumn FROM $table WHERE Username='$tk' AND Password='$mk'";
    $result = $link->query($sql);

    // Kiểm tra kết quả
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row[$idColumn];
    } else {
        return 0; // Không tìm thấy người dùng
    }
}

*/
?>

