<?php 
    include "../model/pdo.php";
    include "header.php";
    include "../model/modeldanhmuc.php";
    include "../model/modelsanpham.php";

    //controler
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            // controller danh mục
            case 'adddm':
                //kiểm tra người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $ten_loai = $_POST['ten_loai'];
                    //thêm danh mục
                    insert_danhmuc($ten_loai);//gọi ra hàm từ modeldanhmuc
                    $messeger = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall();//load ra tất cả dữ liệu của danh mục
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){    //kiểm tra xem id có tồn tại hay không và có lớn hơn 0 hay không
                    delete_danhmuc($_GET['id']);//xóa danh mục theo id
                };
                $listdanhmuc = loadall();//load ra tất cả dữ liệu của danh mục
                include "danhmuc/list.php";
                break;
            case 'suadm': //lấy giá trị ra form để update
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dmuc = loadone($_GET['id']);//load ra 1 loại của danh mục
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){ //kiểm tra tồn tại và có được click hay không
                    $ten_loai = $_POST['ten_loai'];
                    $ma_loai = $_POST['ma_loai'];
                    update_danhmuc($ma_loai,$ten_loai);//cập nhật danh mục
                    $messeger = "Cập nhật thành công";
                }
                $listdanhmuc = loadall();
                include "danhmuc/list.php";
                break;


            // controller sản phẩm
            case 'addsp':
                //kiểm tra người dùng có click vào nút add hay không
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $ten_loai = $_POST['ten_hh'];
                    $gia = $_POST['don_gia'];
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $mo_ta = $_POST['mo_ta'];
                    $ma_loai = $_POST['ma_loai'];
                    $hinh = $_FILES['hinh']['name'];
                    insert_sanpham();//gọi ra hàm từ modelsanpham
                    $messeger = "Thêm thành công";
                }
                include "sanpham/add.php";
                break;
            case 'listsp':
                $listsanpham = loadall();//load ra tất cả dữ liệu của sản phẩm
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){    //kiểm tra xem id có tồn tại hay không và có lớn hơn 0 hay không
                    delete_sanpham($_GET['id']);//xóa sản phẩm theo id
                };
                $listdanhmuc = loadall();//load ra tất cả dữ liệu của sản phẩm
                include "danhmuc/list.php";
                break;
            case 'suasp': //lấy giá trị ra form để update
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dmuc = loadone($_GET['id']);//load ra 1 loại của sản phẩm
                }
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){ //kiểm tra tồn tại và có được click hay không
                    $ten_loai = $_POST['ten_loai'];
                    $ma_loai = $_POST['ma_loai'];
                    update_sanpham($ma_loai,$ten_loai);//cập nhật danh mục
                    $messeger = "Cập nhật thành công";
                }
                $listdsanpham = loadall();
                include "sanpham/list.php";
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