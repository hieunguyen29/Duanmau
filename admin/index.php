<?php 
    include "../model/pdo.php";
    include "header.php";
    //controler
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'adddm':
                //kiểm tra người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $ten_loai = $_POST['ten_loai'];
                    $sql = "insert into loai(ten_loai) values('$ten_loai')";//insert into là thêm mới
                    pdo_execute($sql);
                    $messeger = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";//ASC LÀ SẮP XẾP TĂNG DẦN
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql = "DELETE FROM loai WHERE ma_loai=".$_GET['id'];
                    pdo_execute($sql);
                };
                $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";//ASC LÀ SẮP XẾP TĂNG DẦN
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'addsp':
                include "sanpham/add.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    // include "footer.php";
?>