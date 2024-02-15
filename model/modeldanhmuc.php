<?php

    function insert_danhmuc($ten_loai){
        $sql = "insert into loai(ten_loai) values('$ten_loai')";//insert into là thêm mới
        pdo_execute($sql);
    }
    function delete_danhmuc($ma_loai){
        $sql = "DELETE FROM loai WHERE ma_loai=".$ma_loai;
        pdo_execute($sql);
    }
    function loadall(){
        $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";//ASC LÀ SẮP XẾP TĂNG DẦN //DESC là dữ liệu mới được thêm vào bảng
        $listdanhmuc = pdo_query($sql); //query thì phải return
        return $listdanhmuc;
    }
    function loadone($id){
        $sql="SELECT * FROM loai WHERE ma_loai=".$id;
        $dmuc = pdo_query_one($sql);
        return $dmuc;
    }
    function update_danhmuc($ma_loai,$ten_loai){
        $sql = "UPDATE loai SET ten_loai='$ten_loai' WHERE ma_loai='$ma_loai'";
        pdo_execute($sql);
    }
?>