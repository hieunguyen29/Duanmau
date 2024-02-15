<?php

    function insert_sanpham($ten_loai){
        $sql = "insert into hang_hoa(ten_loai) values('$ten_loai')";//insert into là thêm mới
        pdo_execute($sql);
    }
    function delete_sanpham($ma_loai){
        $sql = "DELETE FROM hang_hoa WHERE ma_loai=".$ma_loai;
        pdo_execute($sql);
    }
    function loadall(){
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_loai ASC";//ASC LÀ SẮP XẾP TĂNG DẦN //DESC là dữ liệu mới được thêm vào bảng
        $listsanpham = pdo_query($sql); //query thì phải return
        return $listsanpham;
    }
    function loadone($id){
        $sql="SELECT * FROM hang_hoa WHERE ma_loai=".$id;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
    function update_sanpham($ma_loai,$ten_loai){
        $sql = "UPDATE hang_hoa SET ten_loai='$ten_loai' WHERE ma_loai='$ma_loai'";
        pdo_execute($sql);
    }
?>