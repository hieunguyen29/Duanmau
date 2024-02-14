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
                $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";//ASC LÀ SẮP XẾP TĂNG DẦN //DESC là dữ liệu mới được thêm vào bảng
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){    //kiểm tra xem id có tồn tại hay không và có lớn hơn 0 hay không
                    $sql = "DELETE FROM loai WHERE ma_loai=".$_GET['id'];
                    pdo_execute($sql);
                };
                $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";//ASC LÀ SẮP XẾP TĂNG DẦN //DESC là dữ liệu mới được thêm vào bảng
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="SELECT * FROM loai WHERE ma_loai=".$_GET['id'];
                    $dmuc = pdo_query_one($sql);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){ //kiểm tra tồn tại và có được click hay không
                    $ten_loai = $_POST['ten_loai'];
                    $ma_loai = $_POST['ma_loai'];
                    $sql = "UPDATE loai SET ten_loai='$ten_loai' WHERE ma_loai='$ma_loai'";
                    pdo_execute($sql);
                    $messeger = "Cập nhật thành công";
                }

                $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";//ASC LÀ SẮP XẾP TĂNG DẦN //DESC là dữ liệu mới được thêm vào bảng
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