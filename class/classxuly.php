<?php
    class xuly extends database{
        public function danhsachnhanvien($id=''){
            if($id){
                $sql="select * from nhanvien where MaNV='$id'";
            }else{
                $sql="select * from nhanvien n join loainv d on n.MaLoai=d.MaLoai";
            }
            return $this->xuatdulieu($sql);
        }

        public function themkhachhang($sql){
            return $this->dangky($sql);
        }

        public function selectchucvu($value=''){
            $str='';
            $sql="select * from loainv";
            $result=$this->xuatdulieu($sql);
            for($i=1;$i<count($result);$i++){
                if($result[$i]['MaLoai']==$value){
                    $str.= '<option selected value="'.$result[$i]['MaLoai'].'">'.$result[$i]['TenLoai'].'</option>';
                }
                else
                {
                    $str.= '<option value="'.$result[$i]['MaLoai'].'">'.$result[$i]['TenLoai'].'</option>';
                }
            }
            return $str;
        }

        public function themnhanvien($sql){
            return $this->dangky($sql);
        }

        public function xoanhanvien($id){
            $sql="delete from nhanvien where MaNV='$id'";
            return $this->xoadulieu($sql);
        }
        public function suanhanvien($sql){
            return $this->suadulieu($sql);
        }
    }

?>
