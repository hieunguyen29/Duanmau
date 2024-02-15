<?php

?>
        
        
        <div class="row">
            <div class="row formtitle">
                <h1>Bảng Hàng Hóa</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formhanghoa">
                    <table>
                        <!-- tr Cột -->
                        <tr>
                            <!-- th-td Hàng -->
                            <th></th>
                            <th class="ma_hh">Mã Hàng Hóa</th>
                            <th>Tên hàng hóa</th>
                            <th>Giá</th>
                            <th>Hình Ảnh</th>
                            <th>Ngày nhập</th>
                            <th>Mô tả</th>
                            <th>Mã Loại</th>
                            <th></th>
                        </tr>
                        <!-- tr Cột -->

                        <?php 
                            foreach ($listhanghoa as $hanghoa){
                                extract($hanghoa);
                                $updatesp = "index.php?act=suasp&id=".$ma_hh; // Sử dụng ma_loai thay vì id
                                $deletesp = "index.php?act=xoasp&id=".$ma_hh; // Sử dụng ma_loai thay vì id
                                echo '
                                <!-- tr Cột -->
                                <tr>
                                    <!-- th-td Hàng -->
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$ma_hh.'</td>
                                    <td>'.$ten_hh.'</td>
                                    <td>'.$don_gia.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$ngay_nhap.'</td>
                                    <td>'.$mo_ta.'</td>
                                    <td>'.$ma_loai.'</td>
                                    <td>
                                        <a href="'.$updatesp.'"><input type="button" name="" value="sửa" id=""></a>                            
                                        <a href="'.$deletesp.'"><input type="button" value="xóa" name="" id=""></a>
                                    </td>
                                </tr>
                                ';
                            }
                        ?>

                        <tr>
                            <!-- th-td Hàng -->
                            <td><input type="checkbox" name="" id=""></td>
                            <td class="ma_hh">001</td>
                            <td>Đồng Hồ Apple watch</td>
                            <td>500$</td>
                            <td><img src="../image/1.jpg" alt=""></td>
                            <td>1/2/2024</td>
                            <td>Hàng chất lượng cao</td>
                            <td>001</td>
                            <td>
                                <input type="button" name="" value="sửa" id=""> 
                                <input type="button" value="xóa" name="" id="">
                            </td>
                        </tr>
                        <!-- tr Cột -->
                        <tr>
                            <!-- th-td Hàng -->
                            <td><input type="checkbox" name="" id=""></td>
                            <td class="ma_hh">002</td>
                            <td>IPhone 15 Promax</td>
                            <td>1000$</td>
                            <td><img src="../image/1.jpg" alt=""></td>
                            <td>1/2/2024</td>
                            <td>Hàng chất lượng cao</td>
                            <td>002</td>
                            <td>
                                <input type="button" name="" value="sửa" id="">
                                <input type="button" value="xóa" name="" id="">
                            </td>
                        </tr>
                        <!-- tr Cột -->
                        <tr>
                            <!-- th-td Hàng -->
                            <td><input type="checkbox" name="" id=""></td>
                            <td class="ma_hh">003</td>
                            <td>Loa bluetoot</td>
                            <td>800$</td>
                            <td><img src="../image/1.jpg" alt=""></td>
                            <td>1/2/2024</td>
                            <td>Hàng chất lượng cao</td>
                            <td>003</td>
                            <td><input type="button" name="" value="sửa" id=""> <input type="button" value="xóa" name=""
                                    id=""></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả" id="">
                    <input type="button" value="Bỏ chọn tất cả" id="">
                    <input type="button" value="Xóa mục đã chọn" id="">
                    <a href="index.php?act=addsp"><input type="button" value="Thêm mới" id=""></a>
                </div>
            </div>
        </div>